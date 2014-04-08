<?php

namespace Sdz\UserBundle\Validator;
use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 * this class is not implemented yet but we needed it to create js with APYJSformvalidtionbundle
 */
class IsAdresseValid extends Constraint
{
    public $message = "adresse.not_valid";
    
    public function validatedBy()
    {
        return 'sdzblog_isAdresseValid';
    }
}

?>
