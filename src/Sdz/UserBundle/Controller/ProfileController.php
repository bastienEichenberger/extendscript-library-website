<?php

namespace Sdz\UserBundle\Controller;

use FOS\UserBundle\Controller\ProfileController as BaseController;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


/**
 * Class add method show profile in fosuserbundle
 */
class ProfileController extends BaseController
{
    
    /**
     * Function to show user profil, only a logged user can see profiles
     * @param \Sdz\UserBundle\Entity\User $user
     * @return type
     * @throws AccessDeniedException
     */
    public function showByUserNameAction($username) {
        
        $fosusermanager = $this->container->get("fos_user.user_manager");
        $user = $fosusermanager->findUserBy( array('username' => $username) );
        
        if ( $user == null){
            throw new NotFoundHttpException("username not valid");
        }
        
        return $this->container->get('templating')->renderResponse('FOSUserBundle:Profile:show.html.'.$this->container->getParameter('fos_user.template.engine'), array('user' => $user));
    }

    
}
