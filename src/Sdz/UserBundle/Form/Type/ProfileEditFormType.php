<?php


namespace Sdz\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Sdz\BlogBundle\Form\ImageType;


// error with plainPassword -> delete this field
class ProfileEditFormType extends AbstractType {
    
    private $class;

    /**
     * @param string $class The User class name
     */
    public function __construct($class)
    {
        $this->class = $class;
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        
        $this->buildUserForm($builder, $options);
        
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
            ->add('lat', 'hidden', array(
                'attr' => array('data-geo' => 'lat')
            ) )
            ->add('lng', 'hidden', array(
                'attr' => array('data-geo' => 'lng')
            ) )
            ->add('formateAdresse', 'hidden', array(
                'attr' => array('data-geo' => 'formatted_address')
            ) )
                
            ->add('adresse', null, array('label' => 'form.adresse', 'translation_domain' => 'FOSUserBundle') )
            
                
            ->add('aboutMe', 'textarea')
          
            ->add('image', new ImageType(), array('required' => false) )
        ;
        
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults( array(
            'data_class' => $this->class,
            'intention'  => 'profile',
            ) )
        ;
    }
    
    protected function buildUserForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', null, array('label' => 'form.username', 'translation_domain' => 'FOSUserBundle'))
            ->add('email', 'email', array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle'))
        ;
    }
    
    public function getName() {
        return 'sdz_user_edit_profile';
    }

}
