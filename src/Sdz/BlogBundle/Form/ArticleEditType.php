<?php
// src/Sdz/BlogBundle/Form/ArticleEditType.php

namespace Sdz\BlogBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;


class ArticleEditType extends ArticleType // Ici, on hérite de ArticleType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    // On fait appel à la méthode buildForm du parent, qui va ajouter tous les champs à $builder
    parent::buildForm($builder, $options);

  }

  // On modifie cette méthode car les deux formulaires doivent avoir un nom différent
  public function getName()
  {
    return 'sdz_blogbundle_articleedittype';
  }
}
