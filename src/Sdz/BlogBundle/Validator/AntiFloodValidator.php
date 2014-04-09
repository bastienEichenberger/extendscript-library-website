<?php

namespace Sdz\BlogBundle\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Request;

class AntiFloodValidator extends ConstraintValidator {

    private $request;
    private $repository;

    public function __construct(Request $request, EntityManager $em) {
        $this->request = $request;
        $this->repository = $em->getRepository('SdzBlogBundle:Commentaire');
    }

    public function validate($value, Constraint $constraint) {

        $ip = $this->request->server->get('REMOTE_ADDR');

        if ($this->repository->isFlood($ip, $constraint->secondes)) {
            $this->context->addViolation($constraint->message, array('%secondes%' => $constraint->secondes));
        }
    }

}
