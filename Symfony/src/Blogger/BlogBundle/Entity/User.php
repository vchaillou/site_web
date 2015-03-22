<?php
// src/Blogger/BlogBundle/Entity/User.php

namespace Blogger\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as FOSUser;	// Intégration de la classe User de FriendsOfSymfony

/**
 * @ORM\Entity
 * @ORM\Table(name="name")
 */
class User extends FOSUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

}