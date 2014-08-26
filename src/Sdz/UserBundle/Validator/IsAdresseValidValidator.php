<?php

namespace Sdz\UserBundle\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Description of IsAdresseValidValidator
 * @author bastieneichenberger
 */
class IsAdresseValidValidator extends ConstraintValidator {
    
    public function validate($value, Constraint $constraint) {
        
        $city = urlencode($value);
        $url = "http://maps.googleapis.com/maps/api/geocode/json?address=" . $city . "&sensor=false";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = json_decode(curl_exec($ch), true);
        $statut = $response['status'];
        
        if($statut == "OK"){
            return true;
        }
        
        $this->context->addViolation($constraint->message);
        return false;
        
    }
}

?>
