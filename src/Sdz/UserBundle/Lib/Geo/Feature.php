<?php

namespace Sdz\UserBundle\Lib\Geo;

/**
 * Description of Feature
 *
 * @author bastieneichenberger
 */
class Feature implements \JsonSerializable
{
    private $type;
    private $geometry;
    private $id;
    private $properties;
	
	public function __construct($id, $geom, $properties) {
            $this->type = "Feature";
            $this->geometry = $geom;
            $this->id = $id;
            $this->properties = $properties;
	}

    public function jsonSerialize() {
        return [
            'type' => $this->type,
            'geometry' => $this->geometry,
            'id' => $this->id,
            'properties' => $this->properties
            
        ];
    }
}

?>
