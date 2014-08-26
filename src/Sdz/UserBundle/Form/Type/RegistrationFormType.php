<?php

namespace Sdz\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
use Sdz\UserBundle\Form\Type\LocationType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        
        $builder->add('displayMail', 'choice', array(
            'choices' => array(
                true => 'form.display_email.yes',
                false => 'form.display_email.no'
            ),
            'expanded' => true,
            'multiple' => false,
            'data' => false
        ));
        
        $builder->add('aboutMe', 'textarea', array( 'label' => 'form.about_me' ));
        
        
        $builder->add('displayAdresse', 'choice', array(
            'choices' => array(
                true => 'form.display_adresse.yes',
                false => 'form.display_adresse.no'
            ),
            'expanded' => true,
            'multiple' => false,
            'data' => true
        ));
        
        $builder->add('location', new LocationType(), array( 'label' => false ) );
        
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Sdz\UserBundle\Entity\User',
            'cascade_validation' => true,
        ));
    }

    public function getName()
    {
        return 'sdz_user_registration';
    }
}