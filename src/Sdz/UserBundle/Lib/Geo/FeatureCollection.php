<?php

namespace Sdz\UserBundle\Lib\Geo;

/**
 * Description of FeatureCollection
 *
 * @author bastieneichenberger
 */
class FeatureCollection implements \JsonSerializable {

    private $type;
    private $features;
    private $properties;

    public function __construct() {
        $this->type = "FeatureCollection";
        $this->features = array();
        $this->properties = null;
    }

    public function addFeature($feature) {
        array_push($this->features, $feature);
    }

    public function addProperties($properties) {
        $this->properties = $properties;
    }

    public function jsonSerialize() {
       
        return array(
                    'type' => $this->type, 
                    'features' => $this->features, 
                    'properties' => $this->properties
                );
    }

}

?>
