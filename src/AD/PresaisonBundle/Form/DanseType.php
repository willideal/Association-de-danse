<?php

namespace AD\PresaisonBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DanseType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomdanse','text',array('label'=>'Danse :'))  
			->add('descrdanse','text',array('label'=>'Description :')) 
        ;
			$builder->add('idniveau', 'entity', array(
			  'class' => 'ADCoreBundle:Niveau',
			  'property' => 'libelleniveau',
				'label'=>'Choix Niveau:',
				'empty_value' => '- Choisissez un ou plusieur niveau -',
			  'multiple' => true
		
		));
	
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AD\CoreBundle\Entity\Danse'
        ));
    }
}
