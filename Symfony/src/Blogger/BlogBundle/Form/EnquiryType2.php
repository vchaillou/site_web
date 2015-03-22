<?php
// src/Blogger/BlogBundle/Form/EnquiryType2.php

namespace Blogger\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class EnquiryType2 extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom');
        $builder->add('email', 'email');
        $builder->add('sujet');
        $builder->add('message', 'textarea');
    }

    public function getName()
    {
        return 'contact';
    }
}

?>