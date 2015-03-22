<?php
// src/Blogger/BlogBundle/Controller/PageController.php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Blogger\BlogBundle\Entity\Enquiry2;
use Blogger\BlogBundle\Form\EnquiryType2;

//use Blogger\BlogBundle\Entity\User;
//use Blogger\BlogBundle\Form\Type\RegistrationFormType;
//use Blogger\BlogBundle\Form\Type\ConnexionFormType;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('BloggerBlogBundle:Page:index.html.twig');
    }
    
    public function critiquesAction()
    {
    	$em = $this->getDoctrine()
                   ->getEntityManager();

        $blogs = $em->createQueryBuilder()
                    ->select('b')
                    ->from('BloggerBlogBundle:Blog',  'b')
                    ->addOrderBy('b.created', 'DESC')
                    ->getQuery()
                    ->getResult();

        return $this->render('BloggerBlogBundle:Page:critiques.html.twig', array(
            'blogs' => $blogs
        ));
    }
    
    public function contactAction()
    {
        $enquiry = new Enquiry2();
        $form = $this->createForm(new EnquiryType2(), $enquiry);
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            if ($form->isValid()) {
                // Le formulaire est valide
                // Donc on redirige l'utilisateur vers la page d'index
                return $this->redirect($this->generateUrl('BloggerBlogBundle_homepage'));
            }
        }
        return $this->render('BloggerBlogBundle:Page:contact.html.twig', array('form' => $form->createView()));
    }
}
