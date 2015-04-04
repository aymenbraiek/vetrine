<?php

namespace Smart\UserBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
use Smart\AnnonceBundle\Form\ImageType;

class RegistrationFormType extends BaseType
{
	
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
		
		$builder
            ->add('nom','text')
            ->add('prenom')
            
            ->add('tel','number',array('invalid_message'=>'ce champ est de type entier '))
			->add('mobile','number',array('required'=>FALSE,'invalid_message'=>'ce champ est de type entier '))
            ->add('image', new ImageType(), array('required'=>FALSE,'label'=>'ton image','label_attr'=>array('style'=>'diplay:none;')))
			->add('governorat','entity',array('class'=>'SmartAnnonceBundle:Governorat','property'=>'ville','multiple'=>FALSE))
        ;
    
    }

    public function getName()
    {
        return 'smart_userbundle_registration';
    }
}