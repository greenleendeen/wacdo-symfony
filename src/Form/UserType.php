<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', TextType::class, [
                'label' => "Titre de l'article",
                'attr' => [
                    "class" => 'form_control'
                ],
                ])
                
            ->add('roles')
            ->add('password', TextType::class, [
                'label' => "Titre de l'article",
                'attr' => [
                    "class" => 'form_control'
                ],
                ])
            ->add('nom' , TextType::class, [
                'label' => "Titre de l'article",
                'attr' => [
                    "class" => 'form_control'
                ],
                ])
            ->add('prenom' , TextType::class, [
                'label' => "Titre de l'article",
                'attr' => [
                    "class" => 'form_control'
                ],
                ])
            ->add('date_embauche', null, [
                'widget' => 'single_text',
            ])
            ->add('administrateur', CheckboxType::class,
            [
                'label' => 'admin?',
                'attr' => [
                    "class" => 'form_control'
                ],

            ] )
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
