<?php

namespace Sdz\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CrEOF\Spatial\PHP\Types\Geography\Point;
use Symfony\Component\Validator\Constraints as Assert;
use Sdz\UserBundle\Validator\IsAdresseValid;

/**
 * @ORM\Entity
 * @ORM\Table(name="jlfa_location")
 * @ORM\HasLifecycleCallbacks
 */
class Location {

    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(message="fos_user.adresse.lat")
     */
    private $lat;

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(message="fos_user.adresse.lng")
     */
    private $lng;

    /**
     * @ORM\Column(type="point")
     */
    private $geom;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $formateAdresse;
    
    /**
     * @Assert\NotBlank(message="fos_user.adresse.blank")
     * @IsAdresseValid(message="fos_user.adresse.not_valid") 
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;
    
    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function updateLocation() {
        $point = new Point($this->lng, $this->lat, 4326);
        $this->setGeom($point);
    }
    
    public function getFormateAdresse() {
        return $this->formateAdresse;
    }

    public function setFormateAdresse($formateAdresse) {
        $this->formateAdresse = $formateAdresse;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getLat() {
        return $this->lat;
    }
    
    /**
     * @param type $lat
     */
    public function setLat($lat) {
        $this->lat = $lat;
    }

    public function getLng() {
        return $this->lng;
    }
    
    /**
     * @param type $lng
     */
    public function setLng($lng) {
        $this->lng = $lng;
    }

    public function getGeom() {
        return $this->geom;
    }

    public function setGeom(\CrEOF\Spatial\PHP\Types\Geography\Point $geom) {
        $this->geom = $geom;
    }

}

?>
