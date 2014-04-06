<?php

namespace Sdz\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Sdz\BlogBundle\Entity\Article;
use Sdz\BlogBundle\Entity\Commentaire;
use Sdz\BlogBundle\Form\ArticleType;
use Sdz\BlogBundle\Form\ArticleEditType;
use Sdz\BlogBundle\Form\CommentaireType;


use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Acl\Domain\ObjectIdentity;
use Symfony\Component\Security\Acl\Domain\UserSecurityIdentity;
use Symfony\Component\Security\Acl\Permission\MaskBuilder;
use Symfony\Component\Security\Acl\Domain\RoleSecurityIdentity;


/**
 * Class to control the blog
 */
class BlogController extends Controller {
    
    
    public function indexAction($page) {
        // articles per page
        $nbParPage = $this->container->getParameter('sdzblog.nombre_par_page');
        $em = $this->getDoctrine()->getManager();
        
        // get articles of current page
        $articles = $em->getRepository('SdzBlogBundle:Article')
                ->getArticles($nbParPage, $page);

        $last_comments = $em->getRepository('SdzBlogBundle:Commentaire')
                ->getFiveLastComments();

        return $this->render('SdzBlogBundle:blog:index.html.twig', array(
                    'articles' => $articles,
                    'last_comments' => $last_comments,
                    'page' => $page,
                    'nb_page' => ceil(count($articles) / $nbParPage) ? : 1,
                    'nombre_sur_page' => $articles->getIterator()->count()
        ));
    }
    
    /**
     * Function to generate delete form (used in delete comment and index views)
     * @param integer $id the id of entity to delete
     * @return TwigTemplate
     */
    public function delete_formAction($id) {

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SdzBlogBundle:blog:delete_form.html.twig', array(
                        'form' => $deleteForm->createView(),
                    )
        );
    }
    
    /**
     * Function to create the delete form
     * @param integer $id the id of the element to delete
     * @return Form
     */
    protected function createDeleteForm($id) {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm();
    }

    /**
     * Function to add a post
     * @Secure(roles="ROLE_AUTHOR")
     * @return TwigTemplate
     */
    public function addPostAction() {

        $article = new Article;
        if (null !== $this->getUser()) {
            $article->setAuthor($this->getUser());
        }

        $form = $this->createForm(new ArticleType(), $article);
        $request = $this->getRequest();

        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                // persisting multiple translations, assume default locale is FR
                $em = $this->getDoctrine()->getManager();
                $article = $em->merge($article);
                $translatableListener = $this->get('stof_doctrine_extensions.listener.translatable');
                $translatableListener->setTranslatableLocale($translatableListener->getDefaultLocale());
                $repository = $em->getRepository('Gedmo\\Translatable\\Entity\\Translation');
                $repository->translate($article, 'titre', 'de', $article->getTitreDe())
                        ->translate($article, 'contenu', 'de', $article->getContenuDe())
                        ->translate($article, 'titre', 'en', $article->getTitreEn())
                        ->translate($article, 'contenu', 'en', $article->getContenuEn());
                
                $em->persist($article);
                $em->flush();
                $this->get('session')->getFlashBag()->add('info', 'blog.article.added');

                return $this->redirect($this->generateUrl('sdzblog_accueil'));
            }
        }

        return $this->render('SdzBlogBundle:blog:add_post.html.twig', array(
                    'form' => $form->createView()
        ));
    }

    
    /**
     * Function to edit an article
     * @param \Sdz\BlogBundle\Entity\Article $article
     * @Secure(roles="ROLE_ADMIN")
     * @return TwigTemplate
     */
    public function editAction(Article $article) {
        
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();
        
        if ($request->getMethod() == 'POST') {
            $form = $this->createForm(new ArticleEditType(), $article);
            $form->bind($request);

            if ($form->isValid() ) {
                $translatableListener = $this->get('stof_doctrine_extensions.listener.translatable');
                $translatableListener->setTranslatableLocale($translatableListener->getDefaultLocale());
                
                $repository = $em->getRepository('Gedmo\\Translatable\\Entity\\Translation');
                $repository->translate($article, 'titre', 'de', $article->getTitreDe())
                        ->translate($article, 'contenu', 'de', $article->getContenuDe())
                        ->translate($article, 'titre', 'en', $article->getTitreEn())
                        ->translate($article, 'contenu', 'en', $article->getContenuEn());
                
                $em->persist($article);
                $em->flush();

                $this->get('session')->getFlashBag()->add('warning', 'blog.article.edit');
                return $this->redirect($this->generateUrl('sdzblog_voir', array('slug' => $article->getSlug() ) ) );
            }
        }
        
        // this part have to been rewrite. Asumme we can use a query walker
        // https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/translatable.md#using-orm-query-hint
        $article->setTranslatableLocale('en');
        $em->refresh($article);
        $content_en = $article->getContenu();
        $title_en = $article->getTitre();
        
        $article->setTranslatableLocale('de');
        $em->refresh($article);
        $content_de = $article->getContenu();
        $title_de = $article->getTitre();
        
        $article->setTranslatableLocale('fr');
        $em->refresh($article);
        
        $article->setContenuDe($content_de);
        $article->setTitreDe($title_de);
        $article->setContenuEn($content_en);
        $article->setTitreEn($title_en);
        
        $form = $this->createForm(new ArticleEditType(), $article);
        
        return $this->render('SdzBlogBundle:blog:edit_post.html.twig', array(
                    'form' => $form->createView(),
                    'article' => $article
        ));
    }
    
    
    /**
     * Function to display an article
     * @param \Sdz\BlogBundle\Entity\Article $article
     * @param \Symfony\Component\Form\Form $form
     * @return TwigTemplate
     */
    public function voirAction(Article $article, Form $form = null) {

        $em = $this->getDoctrine()->getManager();

        $commentaires = $em->getRepository('SdzBlogBundle:Commentaire')
                ->getByArticle($article->getId());

        if (null === $form) {
            $form = $this->getCommentaireForm($article);
        }

        return $this->render('SdzBlogBundle:blog:post.html.twig', array(
                    'article' => $article,
                    'form' => $form->createView(),
                    'commentaires' => $commentaires
        ));
    }

    /**
     * Function to delete an article
     * @param \Sdz\BlogBundle\Entity\Article $article
     * @Secure(roles="ROLE_ADMIN")
     * @return TwigTemplate
     */
    public function supprimerAction(Article $article) {

        $form = $this->createDeleteForm($article->getId());
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) { 
                $em = $this->getDoctrine()->getManager();
                $em->remove($article);
                $em->flush();

                $this->get('session')->getFlashBag()->add('info', 'blog.article.delete');

                return $this->redirect($this->generateUrl('sdzblog_accueil'));
            }
        }
        return $this->redirect($this->generateUrl('sdzblog_accueil'));
    }
    
    /**
     * Function to add a comment
     * @param \Sdz\BlogBundle\Entity\Article $article
     * @return TwigTemplate
     */
    public function ajouterCommentaireAction(Article $article) {
        $commentaire = new Commentaire;
        $commentaire->setArticle($article);
        $commentaire->setIp($this->getRequest()->server->get('REMOTE_ADDR'));

        $form = $this->getCommentaireForm($article, $commentaire);
        $request = $this->getRequest();

        // route force POST method, test is not required
        $form->bind($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($commentaire);
            $em->flush();
            
            $aclProvider = $this->get('security.acl.provider');
            $objectIdentity = ObjectIdentity::fromDomainObject($commentaire);
            $acl = $aclProvider->createAcl($objectIdentity);
            
            // if user is logged allow him to delete his post
            if (null != $this->getUser() ) {
                $user = $this->getUser();
                $securityIdentity = UserSecurityIdentity::fromAccount($user);
                $acl->insertObjectAce($securityIdentity, MaskBuilder::MASK_OWNER);
            }
            // the admin have is authorised to delete post
            $roleSecurityIdentity = new RoleSecurityIdentity('ROLE_ADMIN');
	    $acl->insertObjectAce($roleSecurityIdentity, MaskBuilder::MASK_MASTER);
	    $aclProvider->updateAcl($acl);

            return $this->redirect($this->generateUrl('sdzblog_voir', array('slug' => $article->getSlug() ) ) );
        }
        
        // if the comment is not added -> display error, this function control IP with antifloodvalidator
        $this->get('session')->getFlashBag()->add('danger', 'blog.comment.error');

        // not redirect to keep params
        return $this->forward('SdzBlogBundle:blog:voir', array(
                    'article' => $article,
                    'form' => $form,
                    '_route' => 'sdzblog_voir',
                    '_route_params' => array('_locale' => $request->getLocale(), 'slug' => $article->getSlug())
        ));
    }

    /**
     * Function to return the comment form
     * @param Article $article
     * @return Form
     */
    protected function getCommentaireForm(Article $article, Commentaire $commentaire = null) {
        
        if (null === $commentaire) {
            $commentaire = new Commentaire;
        }

        if (null !== $this->getUser()) {
            $commentaire->setUser($this->getUser());
        }

        return $this->createForm(new CommentaireType(), $commentaire);
    }

    /**
     * Function to delete a comment
     * @param \Sdz\BlogBundle\Entity\Commentaire $commentaire
     * @return TwigTemplate
     * @throws AccessDeniedException
     */
    public function supprimerCommentaireAction(Commentaire $commentaire) {
        $form = $this->createDeleteForm($commentaire->getId());
        $request = $this->getRequest();
        $securityContext = $this->get('security.context');
        
        // check if the user have rights
        if (false === $securityContext->isGranted('EDIT', $commentaire) 
            && false === $securityContext->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedException();
        }
        
        $form->bind($request);
        if ($form->isValid()) {
           
            $em = $this->getDoctrine()->getManager();
            $em->remove($commentaire);
            $em->flush();

            $this->get('session')->getFlashBag()->add('info', 'blog.comment.delete');
            return $this->redirect($this->generateUrl('sdzblog_voir', array('slug' => $commentaire->getArticle()->getSlug())));
        }
    }
    

}
