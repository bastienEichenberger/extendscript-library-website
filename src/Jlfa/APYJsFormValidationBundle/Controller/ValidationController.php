<?php

namespace Jlfa\APYJsFormValidationBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\UserBundle\Controller\RegistrationController as BaseController;


/**
 * Description of CustomRegistrationController
 *
 * @author bastieneichenberger
 */
class ValidationController extends BaseController {
    
    function isMailValidAction(){
        $request = $this->container->get('request');
        $my_mail = $request->get('mail');
        
        $userManager = $this->container->get('fos_user.user_manager');
        $user = $userManager->createUser();
        $user->setEmail($my_mail);
        
        $errors = $this->container->get('validator')->validate($user);
        $data = null;
        if (count($errors) > 0) {
            $data = $errors[0]->getMessage();
        }
        
        return new JsonResponse($data);
    }
}

?>
