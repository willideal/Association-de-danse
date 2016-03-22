<?php

namespace AD\SoireeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PratiquerType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

		$builder->add('idsoiree', 'entity', array(
			  'class' => 'ADCoreBundle:Soiree',
			  'property' => 'intitule',
			  'label'  => 'Choisir La soirée :',
			  'empty_value' => '- Choisissez une soiree -',
			  'multiple' => false
		
		));
		$builder->add('iddanse', 'entity', array(
			  'class' => 'ADCoreBundle:Danse',
			  'property' => 'nomDanse',
			  'label'  => 'Choisir Danse :',
			  'empty_value' => '- Choisissez une danse -',
			  'multiple' => false
		
		));
		$builder->add('idsalle', 'entity', array(
			  'class' => 'ADCoreBundle:Salle',
			  'property' => 'nomSalle',
			  'label'  => 'Choisir Salle :',
			  'empty_value' => '- Choisissez une salle -',
			  'multiple' => false
		
		));
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AD\CoreBundle\Entity\Pratiquer'
        ));
    }
}
