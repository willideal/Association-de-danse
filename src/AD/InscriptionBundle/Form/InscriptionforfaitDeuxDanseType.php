<?php

namespace AD\InscriptionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InscriptionforfaitDeuxDanseType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			           
            ->add('idadherent', new AdherentType(), array('label'=>' '))
        ;
		$builder->add('idtypeforfait', 'entity', array(
			  'class' => 'ADCoreBundle:Typeforfait',
			  'property' => 'libelletypeforfait',
			  'label'  => 'Forfait 2 danses :',
			  'multiple' => false
		
		));
		
		$builder->add('danse', 'entity', array(
			  'class' => 'ADCoreBundle:Danse',
			  'property' => 'nomdanse',
			  'label'  => 'Danse :',
			  'empty_value' => '- Choisir danse-',
			  'multiple' => true
		
		));
		
		
		
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AD\CoreBundle\Entity\Inscriptionforfait'
        ));
    }
}
