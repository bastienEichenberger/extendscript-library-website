<?php


namespace Sdz\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\ProfileFormType as BaseType;
use Sdz\UserBundle\Form\Type\VignetteType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class ProfileEditFormType extends BaseType {
    
    
    
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
            'data' => false,
            'label' => false
        ));
        
        $builder->add('aboutMe', 'textarea', array( 'label' => 'form.about_me'));
        
        
        $builder->add('displayAdresse', 'choice', array(
            'choices' => array(
                true => 'form.display_adresse.yes',
                false => 'form.display_adresse.no'
            ),
            'expanded' => true,
            'multiple' => false,
            'data' => true,
            'label' => false
        ));
        
        $builder->add('location', new LocationType(), array( 'label' => false ) );

        $builder->add('birthDate', 'birthday', array('required' => false, 'label' => 'form.birthday') );
        $builder->add('ownWebSite', 'text', array('required' => false, 'label' => 'form.ownwebsite') );
        $builder->add('vignette', new VignetteType(), array('required' => false) );
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Sdz\UserBundle\Entity\User',
            'cascade_validation' => true,
        ));
    }
    
    public function getName() {
        return 'sdz_user_edit_profile';
    }

}