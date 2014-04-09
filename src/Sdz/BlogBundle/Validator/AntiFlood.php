<?php

namespace Sdz\BlogBundle\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class AntiFlood extends Constraint {

    public $secondes = 30;
    public $message = "merci d'attendre plus de %secondes%";

    public function validatedBy() {

        return 'sdzblog_antiflood';
    }

}
