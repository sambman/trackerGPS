<?php

namespace GPS\TrackerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AppareilType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomAppareil', 'text', array())
            ->add('codeAppareil','text', array())
            ->add('typeAppareil','choice', array(
                'choices'   =>  array(
                    'v' =>  'voiture',
                    'm' =>  'moto',
                    'p' =>  'animal',
                    'a' =>  'autre(s)'
                )
            ))
            ->add('descAppareil', 'textarea', array())
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GPS\TrackerBundle\Entity\Appareil'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gps_trackerbundle_appareil';
    }
}
