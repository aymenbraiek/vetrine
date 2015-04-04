<?php

namespace Smart\AnnonceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AnnonceType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre','text', array('label'=>"Titre d'annonce"))
            ->add('description')
            ->add('dateinsert')
            ->add('prix','number',array('invalid_message'=>'ce champ est de type entier '))
            ->add('istop','checkbox',array('required'=>FALSE,'label'=>'mettre en top'))
            ->add('categorie','entity',array('class'=>'SmartAnnonceBundle:Categorie','property'=>'nom','multiple'=>FALSE))
			->add('governorat','entity',array('class'=>'SmartAnnonceBundle:Governorat','property'=>'ville','multiple'=>FALSE))
			->add('image', new ImageType(), array('required'=>FALSE,'label'=>'ton image','label_attr'=>array('style'=>'diplay:none;')))
			->add('token','hidden')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Smart\AnnonceBundle\Entity\Annonce'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'smart_annoncebundle_annonce';
    }
}
