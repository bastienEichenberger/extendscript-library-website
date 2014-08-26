<?php


namespace Sdz\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VignetteType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add('file', 'file', array('label' => 'form.thumbnail'))
    ;
  }

  public function setDefaultOptions(OptionsResolverInterface $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => 'Sdz\UserBundle\Entity\Vignette'
    ));
  }

  public function getName()
  {
    return 'sdz_userbundle_vignettetype';
  }
  
  public function getExtendedType()
  {
    return 'file';
  }
  
}
