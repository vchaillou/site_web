<?php
// src/Blogger/BlogBundle/Controller/BlogController.php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Blogger\BlogBundle\Entity\Enquiry;
use Blogger\BlogBundle\Form\EnquiryType;
use Blogger\BlogBundle\Entity\Blog;

/*
 * Controleur du blog.
 */
class BlogController extends Controller
{
    /*
     * Action pour afficher un article via un id d'article
     */
    public function showIdAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $blog = $em->getRepository('BloggerBlogBundle:Blog')->find($id);

        if (!$blog) {
            throw $this->createNotFoundException('Aucun article correspondant n\'a été trouvé.');
        }

        return $this->render('BloggerBlogBundle:Blog:show.html.twig', array(
            'blog'      => $blog,
        ));
    }
    
    /*
     * Action pour créer un nouvel article
     */
    public function newArticleAction()
    {
        $enquiry = new Enquiry();
        $form = $this->createForm(new EnquiryType(), $enquiry);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);

            if ($form->isValid()) {
                // Le formulaire est valide
                // On ajoute l'article dans la base de données
                
                $manager = $this->getDoctrine()->getManager();
                
				$blog = new Blog();
				$blog->setTitle($enquiry->getTitre());
				$blog->setBlog($enquiry->getArticle());
				
				$blog->setAuthor($this->getUser());
				
				$blog->setCreated(new \DateTime());
				$blog->setUpdated($blog->getCreated());
				$manager->persist($blog);
				
				$manager->flush();
                
                // Donc on redirige l'utilisateur vers la page des critiques
                return $this->redirect($this->generateUrl('BloggerBlogBundle_critiques'));
            }
        }

        return $this->render('BloggerBlogBundle:Blog:new.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
