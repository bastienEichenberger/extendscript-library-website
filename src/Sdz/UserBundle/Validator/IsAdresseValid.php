<?php

namespace Sdz\UserBundle\Validator;
use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 * 
 */
class IsAdresseValid extends Constraint
{
    public $message = "adresse.not_valid";
    
    public function validatedBy()
    {
        return get_class($this).'Validator';
    }
}

?>
