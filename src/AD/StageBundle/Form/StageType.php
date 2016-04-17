<?php

namespace AD\StageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StageType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('intitulestage','text',array('label'=>'Intitule:'))
            ->add('dateStage','date',array('label'=>'date Stage:'))
			->add('heureDebutStage','time',array('label'=>'Heure debut:'))
			->add('heurefinstage','time',array('label'=>'Heure fin:'))
			->add('tarifstage','text',array('label'=>'Tarif:'))
			->add('plafond','text',array('label'=>'Plafond:'))
			->add('seuilviabilite','text',array('label'=>'Seuil de viabilite:'))
			->add('delaipreinscription','text',array('label'=>'Delais:'))
			->add('montantpreinscription','text',array('label'=>'Montant:'))
           
        ;
		
		$builder->add('idprof', 'entity', array(
			  'class' => 'ADCoreBundle:Professeur',
			  'property' => 'nomprof',
			  'label'  => 'Choisir Professeur:',
			  'empty_value' => '- Choisissez un Professeur -',
			  'multiple' => true
		
		));
		
		$builder->add('iddanse', 'entity', array(
			  'class' => 'ADCoreBundle:Danse',
			  'property' => 'nomdanse',
			  'label'  => 'Choisir danse:',
			  'empty_value' => '- Choisissez une danse -',
			  'multiple' => false
		
		));
		
		$builder->add('idsalle', 'entity', array(
			  'class' => 'ADCoreBundle:Salle',
			  'property' => 'nomsalle',
			  'label'  => 'Choisir salle:',
			  'empty_value' => '- Choisissez une salle -',
			  'multiple' => false
		
		));
		
		$builder->add('idniveau', 'entity', array(
			  'class' => 'ADCoreBundle:Niveau',
			  'property' => 'libelleniveau',
			  'label'  => 'Choisir niveau:',
			  'empty_value' => '- Choisissez un niveau -',
			  'multiple' => true
		
		));
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AD\CoreBundle\Entity\Stage'
        ));
    }
}




