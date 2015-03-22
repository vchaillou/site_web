<?php
// src/Blogger/BlogBundle/Entity/Enquiry.php

namespace Blogger\BlogBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\Length;

class Enquiry
{
    protected $title;

    protected $body;

    public function getTitre()
    {
        return $this->title;
    }

    public function setTitre($name)
    {
        $this->title = $name;
    }

    public function getArticle()
    {
        return $this->body;
    }

    public function setArticle($body)
    {
        $this->body = $body;
    }
    
    // Validateur des données du formulaire
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('title', new Length(array(
            'min'        => 2,
            'max'        => 30,
            'minMessage' => 'Le titre doit comporter au moins {{ limit }} caractères',
            'maxMessage' => 'Le titre doit comporter au plus {{ limit }} caractères',
        )));
        $metadata->addPropertyConstraint('body', new Length(array(
            'min'        => 10,
            'max'        => 200,
            'minMessage' => 'L\'article doit comporter au moins {{ limit }} caractères',
            'maxMessage' => 'l\'article doit comporter au plus {{ limit }} caractères',
        )));
    }
}