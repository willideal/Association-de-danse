<?php

namespace AD\PresaisonBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SalleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomsalle','text',array('label'=>'Nom :'))
            ->add('capacite','text',array('label'=>'Capacité :'))  
        ;
		$builder->add('idlieu', 'entity', array(
			  'class' => 'ADCoreBundle:Lieu',
			  'property' => 'nomlieu',
			  'label'  => 'Choisir Lieu : ',
			  'empty_value' => '- Choisissez un lieu -',
			  'multiple' => false
		
		));
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AD\CoreBundle\Entity\Salle'
        ));
    }
}
