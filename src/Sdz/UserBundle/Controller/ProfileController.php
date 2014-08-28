<?php

namespace Sdz\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use FOS\UserBundle\Controller\ProfileController as BaseController;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sdz\UserBundle\Entity\User;
use CrEOF\Spatial\PHP\Types\Geography\Point;

/**
 * Class add method show profile in fosuserbundle
 */
class ProfileController extends BaseController {

    /**
     * Function to show user profil, only a logged user can see profiles
     * @param \Sdz\UserBundle\Entity\User $user
     * @return type
     * @throws AccessDeniedException
     */
    public function showByUserNameAction($username) {
        $fosusermanager = $this->container->get("fos_user.user_manager");
        $user = $fosusermanager->findUserBy(array('username' => $username));
        if ($user == null) {
            throw new NotFoundHttpException("username not valid");
        }
        return $this->container->get('templating')->renderResponse('FOSUserBundle:Profile:show.html.' . $this->container->getParameter('fos_user.template.engine'), array('user' => $user));
    }
   
    

}