<?php

namespace AD\SoireeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SoireeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('intitule','text',array('label'=>'Intitulé :'))
            ->add('datesoiree','date',array('label'=>'Date Soirée :')) 
			->add('heuredebutsoiree','time',array('label'=>'Heure Début :'))  
			->add('heurefinsoiree','time',array('label'=>'Heure Fin :'))  
			->add('dressecode','text',array('label'=>'Dress Code :'))
			->add('tarifsoiree','text',array('label'=>'Tarif :'))
        ;
		$builder->add('idlieu', 'entity', array(
			  'class' => 'ADCoreBundle:Lieu',
			  'property' => 'nomlieu',
			  'label'  => 'Choisir Lieu : ',
			  'empty_value' => '- Choisissez le lieu -',
			  'multiple' => false
		
		));
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AD\CoreBundle\Entity\Soiree'
        ));
    }
}
