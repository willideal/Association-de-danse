<?php

namespace AD\InscriptionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdherentType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomadherent', 'text', array('label'=>'Nom :'))
            ->add('prenomadherent', 'text', array('label'=>'Prénom :'))
            ->add('datenaissadherent', 'birthday', array('label'=>'Date de naissance :'))
            ->add('teladherent', 'number', array('label'=>'Téléphone :'))
            ->add('emailadherent', 'email', array('label'=>'Email :'))
        //    ->add('idreduction')
        //    ->add('idsaison')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AD\CoreBundle\Entity\Adherent'
        ));
    }
}
