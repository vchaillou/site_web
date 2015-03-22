<?php
// src/Blogger/BlogBundle/Entity/Enquiry2.php

namespace Blogger\BlogBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Email;

class Enquiry2
{
    protected $nom;

    protected $email;

    protected $sujet;

    protected $message;

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getSujet()
    {
        return $this->sujet;
    }

    public function setSujet($sujet)
    {
        $this->sujet = $sujet;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }
    
    // Validateur des données du formulaire
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('nom', new Length(array(
            'min'        => 2,
            'max'        => 30,
            'minMessage' => 'Votre nom doit comporter au moins {{ limit }} caractères',
            'maxMessage' => 'Votre nom doit comporter au plus {{ limit }} caractères',
        )));
        $metadata->addPropertyConstraint('email', new Email(array(
        	'message'    => 'L\'adresse email n\'est pas valide'
        )));
        $metadata->addPropertyConstraint('sujet', new Length(array(
            'min'        => 2,
            'max'        => 30,
            'minMessage' => 'Le sujet doit comporter au moins {{ limit }} caractères',
            'maxMessage' => 'Le sujet doit comporter au plus {{ limit }} caractères',
        )));
        $metadata->addPropertyConstraint('message', new Length(array(
            'min'        => 10,
            'max'        => 200,
            'minMessage' => 'Le message doit comporter au moins {{ limit }} caractères',
            'maxMessage' => 'Le message doit comporter au plus {{ limit }} caractères',
        )));
    }
}

?>