<?php

namespace Sdz\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity
 * @ORM\Table(name="jlfa_user")
 * @UniqueEntity(fields="email", message="fos_user.email.already_used")
 * @UniqueEntity(fields="username", message="fos_user.username.already_used")
 */
class User extends BaseUser {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $displayMail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $aboutMe;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $displayAdresse;

    

    /**
     * @ORM\OneToOne(targetEntity="Sdz\UserBundle\Entity\Location", cascade={"persist", "remove"})
     */
    private $location;


    /**
     * override annotations for APYjsFormValidation bundle
     * client side validation in JavaScript
     */

    /**
     * @Assert\NotBlank(message="fos_user.username.blank")
     * @var string
     */
    protected $username;

    /**
     * @Assert\NotBlank(message="fos_user.email.blank")
     * @Assert\Email(message="fos_user.email.invalid")
     * @var string
     */
    protected $email;

    /**
     * This fields use group to allow blank password during the editing process
     * @Assert\NotBlank(message="fos_user.password.blank", groups={"Registration", "ResetPassword", "ChangePassword"})
     * @var string 
     */
    protected $plainPassword;
    
    
    // --------------- OPTIONALS FIELDS -----------------------------

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Assert\DateTime()
     */
    protected $birthDate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Url()
     */
    protected $ownWebSite;

    /**
     * @ORM\OneToOne(targetEntity="Sdz\UserBundle\Entity\Vignette", cascade={"persist", "remove"})
     */
    protected $vignette;


    // --------------- END OPTIONALS FIELDS -------------------------    
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getDisplayMail() {
        return $this->displayMail;
    }

    public function setDisplayMail($displayMail) {
        $this->displayMail = $displayMail;
    }

    public function getAboutMe() {
        return $this->aboutMe;
    }

    public function setAboutMe($aboutMe) {
        $this->aboutMe = $aboutMe;
    }

    public function getDisplayAdresse() {
        return $this->displayAdresse;
    }

    public function setDisplayAdresse($displayAdresse) {
        $this->displayAdresse = $displayAdresse;
    }

    public function getLocation() {
        return $this->location;
    }

    public function setLocation($location) {
        $this->location = $location;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPlainPassword() {
        return $this->plainPassword;
    }

    public function setPlainPassword($plainPassword) {
        $this->plainPassword = $plainPassword;
    }

    public function getBirthDate() {
        return $this->birthDate;
    }

    public function setBirthDate($birthDate) {
        $this->birthDate = $birthDate;
    }

    public function getOwnWebSite() {
        return $this->ownWebSite;
    }

    public function setOwnWebSite($ownWebSite) {
        $this->ownWebSite = $ownWebSite;
    }

    public function getVignette() {
        return $this->vignette;
    }

    public function setVignette($vignette) {
        $this->vignette = $vignette;
    }
    
    

}