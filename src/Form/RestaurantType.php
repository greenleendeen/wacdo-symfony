<?php

namespace App\Form;

use App\Entity\Restaurant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class RestaurantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_resto', TextType::class, [
                'label' => "Nom du restaurant",
                'attr' => [
                    "class" => 'form_control'
                ],
            ])

            ->add('adresse' , TextType::class, [
                'label' => "adresse",
                'attr' => [
                    "class" => 'form_control'
                ],
            ])

            ->add('code_postal', TextType::class, [
                'label' => "Code postal",
                'attr' => [
                    "class" => 'form_control'
                ],
            ])
            ->add('ville', TextType::class, [
                'label' => "ville",
                'attr' => [
                    "class" => 'form_control'
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Restaurant::class,
        ]);
    }
}
