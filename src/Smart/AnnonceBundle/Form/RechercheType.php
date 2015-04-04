<?php

namespace Smart\AnnonceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class RechercheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
		$builder->add('categorie','entity', array(
												'class'=>'SmartAnnonceBundle:Categorie',
												'property'=>'nom',												
												'multiple'=>FALSE,'empty_value'=>'choisir','required'=>FALSE))
				 ->add('governorat','entity', array(
												'class'=>'SmartAnnonceBundle:governorat',
												'property'=>'ville',												
												'multiple'=>FALSE,'empty_value'=>'choisir','required'=>FALSE))
				->add('cle','text',array('required'=>FALSE))
				;
	}

    
    public function getName()
    {
        return 'recherche';
    }
	 public function getDefaultOptions(array $options)
    {
        return array('data_class' => 'Smart\AnnonceBundle\Entity\Categorie',);
    }
}
