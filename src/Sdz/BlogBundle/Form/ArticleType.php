<?php
// src/Sdz/BlogBundle/Form/ArticleType.php

namespace Sdz\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;

class ArticleType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    
    $builder
      ->add('titre',       'text')
      ->add('titreEn',       'text')
      ->add('titreDe',       'text')
      ->add('contenu',     'textarea')
      ->add('contenuEn',     'textarea')
      ->add('contenuDe',     'textarea')
      ->add('image',       new ImageType(), array('required' => false))
      ->add('author', 'fos_user_username', array('read_only' => true, 'required' => false) )
    ;

    // On ajoute une fonction qui va écouter l'évènement PRE_SET_DATA
    $builder->addEventListener(
      FormEvents::PRE_SET_DATA,    // Ici, on définit l'évènement qui nous intéresse
      function(FormEvent $event) { // Ici, on définit une fonction qui sera exécutée lors de l'évènement
        $article = $event->getData();
        // Cette condition est importante, on en reparle plus loin
        if (null === $article) {
          return; // On sort de la fonction lorsque $article vaut null
        }
        // 1. Si l'article n'est pas encore publié, on ajoute le champ publication
        if (false === $article->getPublication()) {
          $event->getForm()->add('publication', 'checkbox', null, array('required' => false));
        } else { // Sinon, on le supprime
          $event->getForm()->remove('publication');
        }

        
        
      }
    );
  }

  public function setDefaultOptions(OptionsResolverInterface $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => 'Sdz\BlogBundle\Entity\Article'
    ));
  }

  public function getName()
  {
    return 'sdz_blogbundle_articletype';
  }
}
