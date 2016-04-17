<?php

namespace AD\StageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StagiaireType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomstagiaire','text',array('label'=>'Nom:'))
            ->add('prenomStagiaire','text',array('label'=>'prenom:'))
			->add('telstagiaire','text',array('label'=>'Tel:'))
           
        ;
		
	$builder->add('idstage', 'entity', array(
			  'class' => 'ADCoreBundle:Stage',
			  'property' => 'intitulestage',
			  'label'  => 'Choisir Stage:',
			  'empty_value' => '- Choisissez un stage -',
			  'multiple' => true
		
		));	
		
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AD\CoreBundle\Entity\Stagiaire'
        ));
    }
}




