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

class BlogController extends Controller {

    public function indexAction($page) {




        // On récupère le nombre d'article par page depuis un paramètre du conteneur
        // cf app/config/parameters.yml
        $nbParPage = $this->container->getParameter('sdzblog.nombre_par_page');
        $em = $this->getDoctrine()->getManager();
        // On récupère les articles de la page courante
        $articles = $em->getRepository('SdzBlogBundle:Article')
                ->getArticles($nbParPage, $page);

        $last_comments = $em->getRepository('SdzBlogBundle:Commentaire')
                ->getFiveLastComments();

        // On passe le tout à la vue
        return $this->render('SdzBlogBundle:blog:index.html.twig', array(
                    'articles' => $articles,
                    'last_comments' => $last_comments,
                    'page' => $page,
                    'nb_page' => ceil(count($articles) / $nbParPage) ? : 1,
                    'nombre_sur_page' => $articles->getIterator()->count()
        ));
    }

    public function delete_formAction($id) {

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SdzBlogBundle:blog:delete_form.html.twig', array(
                    'form' => $deleteForm->createView(),
                        )
        );
    }

    protected function createDeleteForm($id) {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm();
    }

    /**
     * @Secure(roles="ROLE_AUTHOR")
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
                $this->get('session')->getFlashBag()->add('info', 'Article bien ajouté');

                return $this->redirect($this->generateUrl('sdzblog_accueil'));
            }
        }

        return $this->render('SdzBlogBundle:blog:add_post.html.twig', array(
                    'form' => $form->createView()
        ));
    }

    /**
     * @Secure(roles="ROLE_ADMIN")
     */
    /**
     * @Secure(roles="ROLE_ADMIN")
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

                // On définit un message flash
                $this->get('session')->getFlashBag()->add('warning', 'Article bien modifié');

                return $this->redirect($this->generateUrl('sdzblog_voir', array('slug' => $article->getSlug() ) ) );
            }
        }
        
         // On utilise le ArticleEditType
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
     * @Secure(roles="ROLE_ADMIN")
     */
    public function supprimerAction(Article $article) {

        $form = $this->createDeleteForm($article->getId());
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) { // Ici, isValid ne vérifie donc que le CSRF
                // On supprime l'article
                $em = $this->getDoctrine()->getManager();
                $em->remove($article);
                $em->flush();

                // On définit un message flash
                $this->get('session')->getFlashBag()->add('info', 'Article bien supprimé');

                // Puis on redirige vers l'accueil
                return $this->redirect($this->generateUrl('sdzblog_accueil'));
            }
        }
        return $this->redirect($this->generateUrl('sdzblog_accueil'));
    }

    public function ajouterCommentaireAction(Article $article) {
        $commentaire = new Commentaire;
        $commentaire->setArticle($article);
        $commentaire->setIp($this->getRequest()->server->get('REMOTE_ADDR'));

        $form = $this->getCommentaireForm($article, $commentaire);

        $request = $this->getRequest();

        // Avec la route que l'on a, nous sommes forcément en POST ici, pas besoin de le retester
        $form->bind($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($commentaire);
            $em->flush();
            
            // création de l'ACL
            $aclProvider = $this->get('security.acl.provider');
            $objectIdentity = ObjectIdentity::fromDomainObject($commentaire);
            $acl = $aclProvider->createAcl($objectIdentity);
            
            if (null !== $this->getUser()) {
                $user = $this->getUser();
                $securityIdentity = UserSecurityIdentity::fromAccount($user);
                $acl->insertObjectAce($securityIdentity, MaskBuilder::MASK_OWNER);
            }
            
            $roleSecurityIdentity = new RoleSecurityIdentity('ROLE_ADMIN');
	    $acl->insertObjectAce($roleSecurityIdentity, MaskBuilder::MASK_MASTER);
	    $aclProvider->updateAcl($acl);

            // On redirige vers la page de l'article, avec une ancre vers le nouveau commentaire
            return $this->redirect($this->generateUrl('sdzblog_voir', array('slug' => $article->getSlug())) . '#comment' . $commentaire->getId());
        }

        $error_message = $this->get('translator')->trans('blog.comment.error');
        $this->get('session')->getFlashBag()->add('danger', $error_message);


        // On réaffiche le formulaire sans redirection (sinon on perd les informations du formulaire)
        // générer la route de l'article et les paramètres
        return $this->forward('SdzBlogBundle:blog:voir', array(
                    'article' => $article,
                    'form' => $form,
                    '_route' => 'sdzblog_voir',
                    '_route_params' => array('_locale' => $request->getLocale(), 'slug' => $article->getSlug())
        ));
    }

    /**
     * Retourne le formulaire d'ajout d'un commentaire
     * @param Article $article
     * @return Form
     */
    protected function getCommentaireForm(Article $article, Commentaire $commentaire = null) {
        if (null === $commentaire) {
            $commentaire = new Commentaire;
        }

        // Si l'utilisateur courant est identifié, on l'ajoute au commentaire
        if (null !== $this->getUser()) {
            $commentaire->setUser($this->getUser());
        }

        return $this->createForm(new CommentaireType(), $commentaire);
    }

    
    public function supprimerCommentaireAction(Commentaire $commentaire) {
        $form = $this->createDeleteForm($commentaire->getId());
        $request = $this->getRequest();
        
        $securityContext = $this->get('security.context');
        
        
        
        
        if (false === $securityContext->isGranted('EDIT', $commentaire) 
            && false === $securityContext->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedException();
        }
        
        $form->bind($request);

        if ($form->isValid()) { // Ici, isValid ne vérifie donc que le CSRF
            // On supprime l'article
            $em = $this->getDoctrine()->getManager();
            $em->remove($commentaire);
            $em->flush();

            // On définit un message flash
            $this->get('session')->getFlashBag()->add('info', 'Commentaire bien supprimé');

            return $this->redirect($this->generateUrl('sdzblog_voir', array('slug' => $commentaire->getArticle()->getSlug())));
        }
    }
    

    
    

}
