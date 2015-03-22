<?php
// src/Blogger/BlogBundle/DataFixtures/ORM/BlogFixtures.php

namespace Blogger\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Blogger\BlogBundle\Entity\Blog;

class BlogFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $blog1 = new Blog();
        $blog1->setTitle('Un jour sans fin');
        $blog1->setBlog('Vive le jour de la marmotte.');
       
        $blog1->setAuthor('dsyph3r');
       
        $blog1->setCreated(new \DateTime());
        $blog1->setUpdated($blog1->getCreated());
        $manager->persist($blog1);

        $blog2 = new Blog();
        $blog2->setTitle('Terminator');
        $blog2->setBlog('Attention aux machines !!');

        $blog2->setAuthor('Zero Cool');
        
        $blog2->setCreated(new \DateTime("2011-07-23 06:12:33"));
        $blog2->setUpdated($blog2->getCreated());
        $manager->persist($blog2);

        $blog3 = new Blog();
        $blog3->setTitle('Les gardiens de la galaxie');
        $blog3->setBlog('Je s\'appelle Groot.');
      
        $blog3->setAuthor('Gabriel');
       
        $blog3->setCreated(new \DateTime("2011-07-16 16:14:06"));
        $blog3->setUpdated($blog3->getCreated());
        $manager->persist($blog3);

        $blog4 = new Blog();
        $blog4->setTitle('Démineurs');
        $blog4->setBlog('Ça va péter : BOUM !!!');
      
        $blog4->setAuthor('Kevin Flynn');
        
        $blog4->setCreated(new \DateTime("2011-06-02 18:54:12"));
        $blog4->setUpdated($blog4->getCreated());
        $manager->persist($blog4);

       

        $manager->flush();
    }

}