<?php

namespace Sdz\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        
        
        $mail = array(
            true => 'Publier mon adresse e-mail sur ma page de profil.',
            false => 'Non, je préfère garder mon adresse e-mail anonyme.'
        );
        $adresse = array(
            true => 'Publier mon adresse sur ma page de profil.',
            false => 'Non, je préfère garder mon adresse anonyme. '
        );
        
        $builder->add('displayMail', 'choice', array(
            'choices' => $mail,
            'expanded' => true,
            'multiple' => false,
            'data' => false
        ));
        $builder->add('aboutMe', 'textarea');
        
        $builder->add('adresse', null, array('label' => 'form.adresse', 'translation_domain' => 'FOSUserBundle'));
        
        $builder->add('displayAdresse', 'choice', array(
            'choices' => $adresse,
            'expanded' => true,
            'multiple' => false,
            'data' => true
        ));;
        
        
        $builder->add('lat', 'hidden', array(
             'attr' => array('data-geo' => 'lat')
        ));
        $builder->add('lng', 'hidden', array(
             'attr' => array('data-geo' => 'lng')
        ));
       
        $builder->add('formateAdresse', 'hidden', array(
             'attr' => array('data-geo' => 'formatted_address')
        ));
    }

    public function getName()
    {
        return 'sdz_user_registration';
    }
}