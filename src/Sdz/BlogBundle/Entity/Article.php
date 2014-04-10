<?php

namespace Sdz\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\ExecutionContextInterface;
use Gedmo\Translatable\Translatable;

/**
 * Sdz\BlogBundle\Entity\Article
 *
 * @ORM\Table(name="tut_article")
 * @ORM\Entity(repositoryClass="Sdz\BlogBundle\Entity\ArticleRepository")
 * @ORM\HasLifecycleCallbacks()
 * @Assert\Callback(methods={"contenuValide"})
 */
class Article implements Translatable
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(name="date", type="datetime")
   */
  private $date;

  /**
   * @Gedmo\Translatable
   * @Assert\NotBlank(message="blog..article.title.blank")
   * @ORM\Column(name="titre", type="string", length=255)
   */
  private $titre;

  /**
   * @ORM\Column(name="publication", type="boolean")
   */
  private $publication;

  /**
   * @Gedmo\Translatable
   * @Assert\NotBlank(message="blog.article.content.blank")
   * @ORM\Column(name="contenu", type="text")
   */
  private $contenu;

  /**
   * @ORM\Column(type="date", nullable=true)
   */
  private $dateEdition;

  /**
   * @Gedmo\Translatable
   * @Gedmo\Slug(fields={"titre"})
   * @ORM\Column(length=128, unique=true)
   */
  private $slug;

  /**
   * @ORM\OneToOne(targetEntity="Sdz\BlogBundle\Entity\Image", cascade={"persist", "remove"})
   */
  private $image;


  /**
   * @ORM\OneToMany(targetEntity="Sdz\BlogBundle\Entity\Commentaire", mappedBy="article", cascade={"persist", "remove"}))
   */
  private $commentaires;


  /**
   * @ORM\ManyToOne(targetEntity="Sdz\UserBundle\Entity\User")
   */
  private $author;
  
  
  // private property (not persisted)
  
  /**
  * @Gedmo\Locale
  * Used locale to override Translation listener`s locale
  */
  private $locale;
  
  
  /**
   * content in english
   * @var type text
   */
  private $contenuEn;
  
  /**
   * content in german
   * @var type text
   */
  private $contenuDe;
  
  /**
   * title in english
   * @var type text
   */
  private $titreEn;
  
  /**
   * title in german
   * @var type text
   */
  private $titreDe;
  

  public function __construct()
  {
    $this->publication  = true;
    $this->date         = new \Datetime();
    $this->commentaires = new \Doctrine\Common\Collections\ArrayCollection();
  }

  /**
   * @ORM\PreUpdate
   * Callback pour mettre à jour la date d'édition à chaque modification de l'entité
   */
  public function updateDate()
  {
    $this->setDateEdition(new \Datetime());
  }

  public function getId()
  {
    return $this->id;
  }

  public function setDate(\Datetime $date)
  {
    $this->date = $date;
  }

  public function getDate()
  {
    return $this->date;
  }

  public function setTitre($titre)
  {
    $this->titre = $titre;
  }

  public function getTitre()
  {
    return $this->titre;
  }

  public function setContenu($contenu)
  {
    $this->contenu = $contenu;
  }

  public function getContenu()
  {
    return $this->contenu;
  }

  public function setPublication($publication)
  {
    $this->publication = $publication;
  }

  public function getPublication()
  {
    return $this->publication;
  }


  public function setImage(\Sdz\BlogBundle\Entity\Image $image = null)
  {
    $this->image = $image;
  }

  public function getImage()
  {
    return $this->image;
  }

  public function addCommentaire(\Sdz\BlogBundle\Entity\Commentaire $commentaire)
  {
    $this->commentaires[] = $commentaire;
  }

  public function removeCommentaire(\Sdz\BlogBundle\Entity\Commentaire $commentaire)
  {
    $this->commentaires->removeElement($commentaire);
  }

  public function getCommentaires()
  {
    return $this->commentaires;
  }

  public function setDateEdition(\Datetime $dateEdition)
  {
    $this->dateEdition = $dateEdition;
  }

  public function getDateEdition()
  {
    return $this->dateEdition;
  }

  public function setSlug($slug)
  {
    $this->slug = $slug;
  }

  public function getSlug()
  {
    return $this->slug;
  }


  public function setAuthor(\Sdz\UserBundle\Entity\User $user = null)
  {
    $this->author = $user;
  }

  public function getAuthor()
  {
    return $this->author;
  }
  
  public function getContenuEn(){
      return $this->contenuEn;
  }
  
  public function setContenuEn($contenuEn){
      $this->contenuEn = $contenuEn;
  }
  
  public function getContenuDe(){
      return $this->contenuDe;
  }
  
  public function setContenuDe($contenuDe){
      $this->contenuDe = $contenuDe;
  }
  
  public function getTitreEn(){
      return $this->titreEn;
  }
  
  public function setTitreEn($titreEn){
      $this->titreEn = $titreEn;
  }
  
  public function getTitreDe(){
      return $this->titreDe;
  }
  
  public function setTitreDe($titreDe){
      $this->titreDe = $titreDe;
  }

  public function setTranslatableLocale($locale)
  {
    $this->locale = $locale;
  }

  public function contenuValide(ExecutionContextInterface $context)
  {
    $mots_interdits = array('échec', 'abandon');

    // On vérifie que le contenu ne contient pas l'un des mots
    if (preg_match('#'.implode('|', $mots_interdits).'#', $this->getContenu())) {
      // La règle est violée, on définit l'erreur et son message
      // 1er argument : on dit quel attribut l'erreur concerne, ici « contenu »
      // 2e argument : le message d'erreur
      $context->addViolationAt('contenu', 'Contenu invalide car il contient un mot interdit.', array(), null);
    }
  }

}
