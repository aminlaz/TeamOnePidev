<?php

namespace UserBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('last_name')->add('name')->add('roles')

            ->add('interets',EntityType::class,array(
            'class'=>'ProfilingBundle\Entity\Interet',
            'choice_label'=>'souscategorie',
            'multiple'=>true,
            'expanded'=>true,

        ))

            ->add('roles', ChoiceType::class, array(
                    'choices' => array(
                        'Participant' => 'ROLE_PARTICIPANT',
                        'Organisateur' => 'ROLE_ORGANISATEUR',
                        'Blogueur' => 'ROLE_BLOGUEUR',
                        'Admin' => 'ROLE_ADMIN'
                    ),

                    'multiple' => true,
                    'expanded' => true
                )
            )


            ->add('devisFile', VichImageType::class);
    }


    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UserBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'userbundle_user';
    }


}
