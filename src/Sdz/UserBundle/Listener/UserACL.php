<?php
// Sdz/UserBundle\Listerner\UserACL

namespace Sdz\UserBundle\Listener;

use Symfony\Component\Security\Acl\Domain\ObjectIdentity;
use Symfony\Component\Security\Acl\Domain\UserSecurityIdentity;
use Symfony\Component\Security\Acl\Permission\MaskBuilder;

/**
 * Description of UserACL
 *
 * @author bastieneichenberger
 */
class UserACL {
    
    
    private $container;
    
    public function __construct(\Symfony\Component\DependencyInjection\Container $container) {
        $this->container = $container;
    }
    
    public function addACL(){
        
        $securityContext = $this->container->get('security.context');
        $user = $securityContext->getToken()->getUser();
        
        $aclProvider = $this->container->get('security.acl.provider');
        $objectIdentity = ObjectIdentity::fromDomainObject($user);
        $acl = $aclProvider->createAcl($objectIdentity);

        $securityIdentity = UserSecurityIdentity::fromAccount($user);
        $acl->insertObjectAce($securityIdentity, MaskBuilder::MASK_OWNER);
        $aclProvider->updateAcl($acl);
    }
}

?>
