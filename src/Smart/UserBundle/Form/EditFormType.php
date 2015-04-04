<?php

namespace Smart\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EditFormType extends RegistrationFormType
{
			
	 
	 
	
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);


		$builder->remove('password');
		
	}

    
    public function getName()
    {
        return 'smart_userbundle_editformtype';
    }
}
