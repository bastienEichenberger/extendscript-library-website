<?php

namespace Sdz\BlogBundle\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;


/**
 * Class to check if a comment is a spam
 * Check if the comment have more than x URLs or Mails
 */
class AntiSpamValidator extends ConstraintValidator
{
 
  
  /**
   * Function to check if the text is a spam
   * @param string $text
   * @return boolean true is the text is a spam
   */
  public function validate($value, Constraint $constraint) {
    if ( ($this->countLinks($value) + $this->countMails($value)) >= $constraint->links ) {
        $this->context->addViolation($constraint->message, array('%links%' => $constraint->links));
    }
  }


  /**
   * Function to count links
   * @param string $text
   * @return integer numbers of links
   */
  private function countLinks($text)
  {
    preg_match_all(
      '#(http|https|ftp)://([A-Z0-9][A-Z0-9_-]*(?:.[A-Z0-9][A-Z0-9_-]*)+):?(d+)?/?#i',
      $text,
      $matches);

    return count($matches[0]);
  }

  /**
   * Function to count all mails
   * @param string $text
   * @return integer numbers of mails
   */
  private function countMails($text)
  {
    preg_match_all(
      '#[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}#i',
      $text,
      $matches);

    return count($matches[0]);
  }
}
