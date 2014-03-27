<?php

namespace Jlfa\WebSiteBundle\Jsonbuilder;

use Sdz\UserBundle\Lib\Geo\Feature;
use Sdz\UserBundle\Lib\Geo\FeatureCollection;

class GeoJsonBuilder {

    private $em;
    private $router;
    private $memory_limit_max;
    private $memory_limit_standard;
    private $logger_standard;

    public function __construct(\Doctrine\ORM\EntityManager $em, \Symfony\Component\Routing\Router $router) {
        $this->em = $em;
        $this->router = $router;
        $this->memory_limit_max = '32M';
        $this->memory_limit_standard = ini_get('memory_limit');
        $this->logger_standard = $this->em->getConnection()->getConfiguration()->getSQLLogger();
    }

    private function begin_query() {
        ini_set('memory_limit', $this->memory_limit_max);
        $this->em->getConnection()->getConfiguration()->setSQLLogger(null);
    }

    private function end_query() {
        ini_set('memory_limit', $this->memory_limit_standard);
        $this->em->getConnection()->getConfiguration()->setSQLLogger($this->logger_standard);
    }
    
    
    private function getUploadRootDir() {
        return __DIR__ . '/../' . $this->getUploadDir();
    }

    private function getUploadDir() {
        return 'Resources/public/data';
    }

    private function createJSONFile($file_name, $data, $content = null){
        $DATA_DIR = $this->getUploadRootDir();
        $file = fopen($DATA_DIR . '/' . $file_name . '.js', 'w');
        fwrite($file, $content);
        fwrite($file, json_encode($data));
        fclose($file);
    }

    private function execute_statement($sql) {
        $this->begin_query();
        $connection = $this->em->getConnection();
        $statement = $connection->prepare($sql);
        $statement->execute();
        $this->end_query();
        return $statement;
    }

    public function updateCountryJSON() {

        $sql = "SELECT gid, name, ST_AsGeoJSON(world.geom) as geom, count(tut_user.location) AS density, 
                (SELECT count(*) FROM tut_user) as total
                FROM world LEFT JOIN tut_user 
                ON st_contains(world.geom, tut_user.location)
                GROUP BY world.gid
                HAVING count(tut_user.location) > 0";

        $statement = $this->execute_statement($sql);
        $fc = new FeatureCollection();

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
