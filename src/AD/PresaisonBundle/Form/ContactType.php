<?php
// src/AD/DanseBundle/Form/ContactType.php

namespace AD\DanseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name','text',array('label'=>'Nom:'));
        $builder->add('email', 'email',array('label'=>'Email:'));
        $builder->add('sujet','text',array('label'=>'Sujet:'));
        $builder->add('body', 'textarea',array('label'=>'Message:'));
    }

    public function getName()
    {
        return 'contact';
    }
}