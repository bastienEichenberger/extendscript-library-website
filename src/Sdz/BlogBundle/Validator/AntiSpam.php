<?php

namespace Sdz\BlogBundle\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class AntiSpam extends Constraint {

    public $links = 3;
    public $message = "blog.comment.content.spam";

    public function validatedBy() {

        return 'sdzblog_antispam';
    }

}

?>
