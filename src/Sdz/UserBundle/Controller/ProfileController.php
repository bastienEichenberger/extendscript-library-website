<?php


namespace Sdz\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use FOS\UserBundle\Controller\ProfileController as BaseController;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;


/**
 * Class add method show profile in fosuserbundle
 */
class ProfileController extends BaseController
{
    
    public function showAction(\Sdz\UserBundle\Entity\User $user = null)
    {
        // if user is null then load the logged user
        if ( $user == null){
            $user = $this->container->get('security.context')->getToken()->getUser();
            if (!is_object($user) || !$user instanceof UserInterface) {
                throw new AccessDeniedException('This user does not have access to this section.');
            }
        }
        return $this->container->get('templating')->renderResponse('FOSUserBundle:Profile:show.html.'.$this->container->getParameter('fos_user.template.engine'), array('user' => $user));
    }

    
}
