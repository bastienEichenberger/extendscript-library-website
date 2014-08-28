<?php


namespace Sdz\UserBundle\Listener;

use FOS\UserBundle\FOSUserEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * This service udpate the map when the fos_user.registration.confirmed event occured
 * The user must active his account
 */
class MapUpdaterListener implements EventSubscriberInterface {
    
    private $container;
    
    public function __construct(\Symfony\Component\DependencyInjection\Container $container) {
        $this->container = $container;
    }


    public function updateMap() {
       
        $geojsonbuilder = $this->container->get("jlfawebsite.geojsonbuilder");
        $geojsonbuilder->updateCountryJSON();
        $geojsonbuilder->updateMembersJSON();
        
    }

    public static function getSubscribedEvents()
    {
      return array( 
          FOSUserEvents::PROFILE_EDIT_SUCCESS => 'updateMap',
          FOSUserEvents::REGISTRATION_CONFIRM => 'updateMap'
      );
    }
    
    
}

?>
