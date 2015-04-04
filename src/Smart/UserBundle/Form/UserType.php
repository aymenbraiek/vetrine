<?php

namespace Smart\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Smart\AnnonceBundle\Form\ImageType;
class UserType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        	->add('username')
			->add('email')
            ->add('nom','text')
            ->add('prenom')
            
            ->add('tel','number',array('invalid_message'=>'ce champ est de type entier '))
			->add('mobile','number',array('required'=>FALSE,'invalid_message'=>'ce champ est de type entier '))
            ->add('image', new ImageType(), array('required'=>FALSE,'label'=>'ton image','label_attr'=>array('style'=>'diplay:none;')))
			->add('governorat','entity',array('class'=>'SmartAnnonceBundle:Governorat','property'=>'ville','multiple'=>FALSE))
        ;
    
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Smart\UserBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'smart_userbundle_user';
    }
}
