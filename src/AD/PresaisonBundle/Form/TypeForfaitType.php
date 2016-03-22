<?php

namespace AD\PresaisonBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TypeForfaitType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelletypeforfait','text',array('label'=>'Libellé :'))
			->add('tariftypeforfait','text',array('label'=>'Tarif :'))
        ;
			$builder->add('iddanse', 'entity', array(
			  'class' => 'ADCoreBundle:Danse',
			  'property' => 'nomDanse',
			  'label'=>'Choix Danse:',
			  'multiple' => true
		
		));
	
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AD\CoreBundle\Entity\Typeforfait'
        ));
    }
}
