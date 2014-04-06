<?php

namespace Sdz\BlogBundle\Antispam;

/**
 * Class to check if a comment is a spam
 * Check if the comment have more than 3 URLs
 */
class SdzAntispam extends \Twig_Extension
{
  protected $mailer;
  protected $locale;
  protected $nbForSpam;

  public function __construct(\Swift_Mailer $mailer, $nbForSpam)
  {
    $this->mailer    = $mailer;
    $this->nbForSpam = (int) $nbForSpam;
  }

  
  public function setLocale($locale)
  {
    $this->locale = $locale;
  }

  /**
   * Function to check if the text is a spam
   * @param string $text
   * @return boolean true is the text is a spam
   */
  public function isSpam($text)
  {
    return ($this->countLinks($text) + $this->countMails($text)) >= $this->nbForSpam;
  }

  /**
   * Function to add isSpam method to twig
   */
  public function getFunctions()
  {
    return array(
      'checkIfSpam' => new \Twig_Function_Method($this, 'isSpam')
    );
  }

  /**
   * Required method to identify twig method
   */
  public function getName()
  {
    return 'SdzAntispam';
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
