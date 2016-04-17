<?php

namespace AD\PresaisonBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfesseurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomprof','text',array('label'=>'Nom :'))
			->add('prenomprof','text',array('label'=>'Prénoms :'))
			->add('telprof','text',array('label'=>'Téléphone :'))
			->add('emailprof','email',array('label'=>'Email :'))
			->add('tarifhorairecours','text',array('label'=>'Tarif Horaire Cours :'))
			->add('forfaithorairestage','text',array('label'=>'Tarif Horaire Stage :'))
			
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AD\CoreBundle\Entity\Professeur'
        ));
    }
}
