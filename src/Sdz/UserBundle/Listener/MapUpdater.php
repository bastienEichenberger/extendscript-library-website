<?php


namespace Sdz\UserBundle\Listener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Sdz\UserBundle\Entity\User;


/**
 * This service udpate the map when the fos_user.registration.confirmed event occured
 * The user must active his account
 */
class MapUpdater {
    
    private $container;
    
    public function __construct(\Symfony\Component\DependencyInjection\Container $container) {
        $this->container = $container;
    }


    public function updateMap() {
       
        $geojsonbuilder = $this->container->get("jlfawebsite.geojsonbuilder");
        $geojsonbuilder->updateCountryJSON();
        $geojsonbuilder->updateMembersJSON();
        
    }
    
}

?>
