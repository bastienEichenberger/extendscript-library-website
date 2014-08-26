<?php

namespace Jlfa\WebSiteBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;


/**
 * Command to update the contributor map
 * @author bastieneichenberger
 */
class UpdateMapCommand extends ContainerAwareCommand {
    
    protected function configure() {
        $this->setName('map:update');
    }
    
    protected function execute() {
        $geojsonbuilder = $this->getContainer()->get("jlfawebsite.geojsonbuilder");
        $geojsonbuilder->updateCountryJSON();   
        $geojsonbuilder->updateMembersJSON();
    }
}

?>
