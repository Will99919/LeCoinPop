<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChangePasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'disabled' => true,
                'label'=>'Mon adresse email'
            ])
            ->add('Firstname', TextType::class, [
                'disabled' => true,
                'label'=>'Prénom'
            ])
            ->add('Lastname', TextType::class, [
                'disabled' => true,
                'label'=>'Nom'
            ])
            ->add('old_password', PasswordType::class, [
                'mapped'=> false,
                'label'=>'Mon mot de passe actuel',
                'attr'=>[
                    'placeholder'=> 'Veuillez saisir votre mot de passe actuel'
                ]
            
            ]) ->add('new_password', RepeatedType::class,[
                'mapped'=> false,
                'type'=> PasswordType::class,
                'invalid_message'=>'Le mot de passe et la confirmation doivent être identique.',
                'label'=>'Mon nouveau mot de passe',
                'required'=> true,
                'first_options'=> [
                    'label'=>'Mon nouveau mot de passe',
                    'attr'=>[
                        'placeholder'=>'Merci de Saisir votre nouveau mot de passe'
                    ]
                ],
                'second_options'=> [
                    'label'=>'Confirmer votre nouveau mot de passe',
                    'attr'=>[
                        'placeholder'=>'Merci de confirmer nouveau votre mot de passe'
                    ]
                ],
            ]) //input
            ->add('submit', SubmitType::class,[
                'label'=>"Mettre à jour"
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
