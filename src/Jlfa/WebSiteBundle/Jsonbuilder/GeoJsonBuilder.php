<?php

namespace Jlfa\WebSiteBundle\Jsonbuilder;

use Sdz\UserBundle\Lib\Geo\Feature;
use Sdz\UserBundle\Lib\Geo\FeatureCollection;


/**
 * GeooJsonBuilder, class to generate a geojson file
 */
class GeoJsonBuilder {
    
    /** 
     * @var EntityManager $em
     */
    private $em;
    
    /**
     * 
     * @var Router $router
     */
    private $router;
    
    /**
     * The max memory limit to build the geojson file
     * @var $memory_limit_max 32M
     */
    private $memory_limit_max;
    
    /**
     * The standard memory limit
     * @var $memory_limit_standard 
     */
    private $memory_limit_standard;
    
    /**
     *
     * @var SQLLogger $logger_standard
     */
    private $logger_standard;

    public function __construct(\Doctrine\ORM\EntityManager $em, \Symfony\Component\Routing\Router $router) {
        $this->em = $em;
        $this->router = $router;
        $this->memory_limit_max = '32M';
        $this->memory_limit_standard = ini_get('memory_limit');
        $this->logger_standard = $this->em->getConnection()->getConfiguration()->getSQLLogger();
    }
    
    
    /**
     * Function to begin big sql query (limit to max, and set the logger to null)
     */
    private function begin_query() {
        ini_set('memory_limit', $this->memory_limit_max);
        $this->em->getConnection()->getConfiguration()->setSQLLogger(null);
    }
    
    /**
     * Function to reset the standards params
     */
    private function end_query() {
        ini_set('memory_limit', $this->memory_limit_standard);
        $this->em->getConnection()->getConfiguration()->setSQLLogger($this->logger_standard);
    }
    
    /**
     * Function to return the root upload dir
     * @return string rootUploadDir
     */
    private function getUploadRootDir() {
        return __DIR__ . '/../' . $this->getUploadDir();
    }
    
    /**
     * Function to return the upload dir
     * @return string uploadDir
     */
    private function getUploadDir() {
        return 'Resources/public/data';
    }
    
    /**
     * Function to create a json file
     * @param string $file_name
     * @param array $data
     * @param strig $content the content to add at the beginning of the file
     */
    private function createJSONFile($file_name, $data, $content = null){
        $DATA_DIR = $this->getUploadRootDir();
        $file = fopen($DATA_DIR . '/' . $file_name . '.js', 'w');
        fwrite($file, $content);
        fwrite($file, json_encode($data));
        fclose($file);
    }
    
    /**
     * Function to execute sql custom query
     * @param type $sql
     * @return array $statement
     */
    private function execute_statement($sql) {
        $this->begin_query();
        $connection = $this->em->getConnection();
        $statement = $connection->prepare($sql);
        $statement->execute();
        $this->end_query();
        return $statement;
    }
    
    /**
     * Function to generate the geojson file with all countries (density, name)
     */
    public function updateCountryJSON() {

        $sql = "SELECT gid, name, ST_AsGeoJSON(world.geom) as geom, count(tut_user.location) AS density, 
                (SELECT count(*) FROM tut_user) as total
                FROM world LEFT JOIN tut_user 
                ON st_contains(world.geom, tut_user.location)
                GROUP BY world.gid
                HAVING count(tut_user.location) > 0";

        $statement = $this->execute_statement($sql);
        $fc = new FeatureCollection();
        
        // build feature collection
        $total = null;
        while ($row = $statement->fetch()) {

            if ($total == null) {
                $total = $row['total'];
            }

            $id = $row['gid'];
            $geom = json_decode($row['geom']);
            $cntry_name = $row['name'];
            $density = $row['density'];
            $feature = new Feature($id, $geom, array('country' => $cntry_name, 'density' => $density));
            $fc->addFeature($feature);
        }
        $fc->addProperties(array('total' => $total));
        
        $this->createJSONFile('countries', $fc, 'var countries =');
    }
    
    /**
     * Function to update members json file get only members with displayadresse to true
     */
    public function updateMembersJSON() {

        $sql = "SELECT id, username, aboutme, ST_AsGeoJSON(location) AS geom
                FROM tut_user
                WHERE displayadresse IS TRUE";

        $statement = $this->execute_statement($sql);
        $fc = new FeatureCollection();

        while ($row = $statement->fetch()) {
            $id = $row['id'];
            $username = $row['username'];
            $profile_link = $this->router->generate('fos_user_profile_show_by_username', array('username' => $username) ); 
            $geom = json_decode($row['geom']);

            $feature = new Feature($id, $geom, array('username' => $username, 'profile_link' => $profile_link));
            $fc->addFeature($feature);
        }

        $this->createJSONFile('members', $fc, 'var members =');
    }

}

?>
