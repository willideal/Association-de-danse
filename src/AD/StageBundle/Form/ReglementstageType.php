<?php

namespace AD\StageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReglementstageType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('datereglement','date',array('label'=>'Date:'))
            ->add('montantreglement','text',array('label'=>'Montant:'))
			->add('etatreglement','text',array('label'=>'Etat:'))
           
        ;
		
		$builder->add('idstage', 'entity', array(
			  'class' => 'ADCoreBundle:Stage',
			  'property' => 'intitulestage',
			  'label'  => 'Choisir Stage:',
			  'empty_value' => '- Choisissez un stage -',
			  'multiple' => false
		
		));
		
		$builder->add('idstagiaire', 'entity', array(
			  'class' => 'ADCoreBundle:Stagiaire',
			  'property' => 'nomstagiaire',
			  'label'  => 'Choisir Stagiaire:',
			  'empty_value' => '- Choisissez un stagaire -',
			  'multiple' => false
		
		));
		
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AD\CoreBundle\Entity\Reglementstage'
        ));
    }
}




