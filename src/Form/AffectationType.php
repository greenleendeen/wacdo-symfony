<?php

namespace App\Form;

use App\Entity\Affectation;
use App\Entity\Fonction;
use App\Entity\Restaurant;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AffectationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('debut_contrat', null, [
                'widget' => 'single_text',
            ])
            ->add('fin_contrat', null, [
                'widget' => 'single_text',
            ])
            ->add('collaborateur', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'id',
            ])
            ->add('restaurant', EntityType::class, [
                'class' => Restaurant::class,
                'choice_label' => 'id',
            ])
            ->add('poste', EntityType::class, [
                'class' => Fonction::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Affectation::class,
        ]);
    }
}
