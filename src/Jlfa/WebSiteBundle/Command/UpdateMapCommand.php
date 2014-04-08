<?php

namespace Jlfa\WebSiteBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 *
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
