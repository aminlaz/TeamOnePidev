<?php

namespace ReclamationBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReclamationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                 //->add('traite')
                 //->add('dateR')
                // ->add('archive')
                // ->add('corbeille')
                 ->add('type',EntityType::class,array(
                     'class'=>'ReclamationBundle\Entity\TypeReclamation',
                     'choice_label'=>'nom',
                     'multiple'=>false
                 ))
                 ->add('sujet')
                 ->add('contenu');


    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ReclamationBundle\Entity\Reclamation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'reclamationbundle_reclamation';
    }


}
