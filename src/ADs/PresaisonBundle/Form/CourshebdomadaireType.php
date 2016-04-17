<?php

namespace AD\PresaisonBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CourshebdomadaireType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$builder
            ->add('jourcourshebdo','text',array('label'=>'Jour :'))
			->add('heuredebutcourshebdo','time',array('label'=>'Heure Début  :'))
			->add('heurefincourshebdo','time',array('label'=>'Heure Fin :'))	
        ;
		$builder->add('idsalle', 'entity', array(
			  'class' => 'ADCoreBundle:Salle',
			  'property' => 'nomSalle',
			  'label'  => 'Choisir Salle :',
			  'empty_value' => '- Choisissez une salle -',
			  'multiple' => false
		
		));
		
		$builder->add('iddanse', 'entity', array(
			  'class' => 'ADCoreBundle:Danse',
			  'property' => 'nomDanse',
			  'label'  => 'Choisir Danse :',
			  'empty_value' => '- Choisissez une danse -',
			  'multiple' => false
		
		));
		$builder->add('idniveau', 'entity', array(
			  'class' => 'ADCoreBundle:Niveau',
			  'property' => 'libelleniveau',
			  'label'  => 'Choisir Niveau :',
			  'empty_value' => '- Choisissez un niveau -',
			  'multiple' => false
		
		));
		
		$builder->add('idprof', 'entity', array(
			  'class' => 'ADCoreBundle:Professeur',
			  'property' => 'PrenomNom',
			  'label'  => 'Choisir Professeur :',
			  'empty_value' => '- Choisissez un professeur -',
			  'multiple' => false
		
		));
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AD\CoreBundle\Entity\Courshebdomadaire'
        ));
    }
}
