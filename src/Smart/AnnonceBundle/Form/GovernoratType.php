<?php

namespace Smart\AnnonceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GovernoratType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
             ->add('governorat','entity',array('class'=>'SmartAnnonceBundle:Governorat','property'=>'ville','multiple'=>FALSE))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Smart\AnnonceBundle\Entity\Governorat'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'smart_annoncebundle_governorat';
    }
}
