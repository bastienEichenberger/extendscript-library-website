<?php

namespace Sdz\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class LocationType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        $builder->add('lat', 'hidden', array(
            'attr' => array('data-geo' => 'lat')
        ));
        $builder->add('lng', 'hidden', array(
            'attr' => array('data-geo' => 'lng')
        ));
        
        $builder->add('formateAdresse', 'hidden', array(
             'attr' => array('data-geo' => 'formatted_address')
        ));
        
        $builder->add('adresse', null, array('label' => 'form.adresse'));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Sdz\UserBundle\Entity\Location',
        ));
    }
    
    
    public function getName() {
        return 'sdz_locationtype';
    }

}

?>
