<?php

namespace Sdz\UserBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 *
 * @author bastieneichenberger
 */
class DeleteUserCommand extends ContainerAwareCommand {
    
    protected function configure() {
        $this
                ->setName('user:delete')
                ->addArgument('username', InputArgument::REQUIRED, 'give username to delete?')
        ;
    }
    
    protected function execute(InputInterface $input) {
        $username = $input->getArgument('username'); 
        $fosusermanager = $this->getContainer()->get("fos_user.user_manager");
        $user = $fosusermanager->findUserBy( array('username' => $username) );
        $fosusermanager->deleteUser($user);
    }
    
}

?>
