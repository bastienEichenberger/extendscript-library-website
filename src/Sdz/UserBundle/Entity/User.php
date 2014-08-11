<?php

namespace Sdz\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Sdz\UserBundle\Validator\IsAdresseValid;

/**
 * @ORM\Entity
 * @ORM\Table(name="tut_user")
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
     * @Assert\NotBlank(message="fos_user.adresse.blank")
     * @IsAdresseValid(message="fos_user.adresse.not_valid") 
     * @ORM\Column(type="string", length=255)
     */
    protected $adresse;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $displayAdresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $formateAdresse;

    /**
     * @ORM\Column(type="point")
     */
    protected $location;


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
     * @ORM\OneToOne(targetEntity="Sdz\BlogBundle\Entity\Image", cascade={"persist", "remove"})
     */
    protected $image;


    // --------------- END OPTIONALS FIELDS -------------------------
    
    
    
    // ------------- no persistented data -----------------

    protected $lng;
    protected $lat;

    // ------------- end no persitented data -----------------
    
    
    public function __construct() {
        parent::__construct();
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

    public function getAdresse() {
        return $this->adresse;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public function getDisplayAdresse() {
        return $this->displayAdresse;
    }

    public function setDisplayAdresse($displayAdresse) {
        $this->displayAdresse = $displayAdresse;
    }

    public function getFormateAdresse() {
        return $this->formateAdresse;
    }

    public function setFormateAdresse($formateAdresse) {
        $this->formateAdresse = $formateAdresse;
    }

    public function getLocation() {
        return $this->location;
    }

    public function setLocation(\CrEOF\Spatial\PHP\Types\Geography\Point $point) {
        $this->location = $point;
    }

    public function getLng() {
        return $this->lng;
    }

    public function setLng($lng) {
        $this->lng = $lng;
    }

    public function getLat() {
        return $this->lat;
    }

    public function setLat($lat) {
        $this->lat = $lat;
    }

    public function getBirthDate() {
        return $this->birthDate;
    }

    public function setBirthDate($birthDay) {
        $this->birthDate = $birthDay;
    }

    public function getOwnWebSite() {
        return $this->ownWebSite;
    }

    public function setOwnWebSite($ownWebSite) {
        $this->ownWebSite = $ownWebSite;
    }
    
    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
    }


    

}