<?php

namespace Smart\AnnonceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AnnonceInsertType extends AnnonceType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);


		$builder->remove('istop');
		$builder->remove('dateinsert');
	}

    
    public function getName()
    {
        return 'smart_annoncebundle_annonceinserttype';
    }
}
