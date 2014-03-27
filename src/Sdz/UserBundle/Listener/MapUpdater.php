<?php


namespace Sdz\UserBundle\Listener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Sdz\UserBundle\Entity\User;

class MapUpdater {
    
    private $container;
    
    public function __construct(\Symfony\Component\DependencyInjection\Container $container) {
        $this->container = $container;
    }


    public function postPersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        
        if ($entity instanceof User) {
            $geojsonbuilder = $this->container->get("jlfawebsite.geojsonbuilder");
            $geojsonbuilder->updateCountryJSON();
            $geojsonbuilder->updateMembersJSON();
        }
    }
    
}

?>
