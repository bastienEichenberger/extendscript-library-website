<?php

namespace Sdz\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class PointType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        $builder->add('x', 'hidden', array(
            'attr' => array('data-geo' => 'lat')
        ));
        $builder->add('y', 'hidden', array(
            'attr' => array('data-geo' => 'lng')
        ));
        $builder->add('srid', 'hidden', array(
             'data' => 4326
        ));
        $builder->add('latitude', 'hidden', array(
             'data' => 46.8016663
        ));
        $builder->add('longitude', 'hidden', array(
             'data' => 7.145568300000036
        ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'CrEOF\Spatial\PHP\Types\Geography\Point',
        ));
    }
    
    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'CrEOF\Spatial\PHP\Types\Geography\Point',
        );
    }
    
    public function getName() {
        return 'sdz_pointtype';
    }

}

?>
