<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sdz\UserBundle\Form\Type;

use Symfony\Component\Validator\Constraints\DateTime;
use FOS\UserBundle\Form\Type\ProfileFormType as BaseType;
use Symfony\Component\Form\FormBuilderInterface;
use Sdz\BlogBundle\Form\ImageType;

class ProfileEditFormType extends BaseType {
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        parent::buildForm($builder, $options);
        
        $mail = array(
            true => 'Publier mon adresse e-mail sur ma page de profil.',
            false => 'Non, je préfère garder mon adresse e-mail anonyme.'
        );
        $adresse = array(
            true => 'Publier mon adresse sur ma page de profil.',
            false => 'Non, je préfère garder mon adresse anonyme. '
        );
        
        $builder
            ->add('birthDate', 'birthday', array('required' => false) )
            ->add('ownwebsite', 'text', array('required' => false) )
            ->add('displayMail', 'choice', array(
                'choices' => $mail,
                'expanded' => true,
                'multiple' => false,
                'data' => false
            ) )
            ->add('displayAdresse', 'choice', array(
                'choices' => $adresse,
                'expanded' => true,
                'multiple' => false,
                'data' => true
            ) )
            ->add('aboutMe', 'textarea')
            ->add('plainPassword', 'repeated', array(
                'type' => 'password',
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'form.password'),
                'second_options' => array('label' => 'form.password_confirmation'),
                'invalid_message' => 'fos_user.password.mismatch',
            ) )
            ->add('image', new ImageType(), array('required' => false) )
        ;
        
    }
    
    public function getName() {
        return 'sdz_user_edit_profile';
    }

}
