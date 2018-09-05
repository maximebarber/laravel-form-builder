<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class CommercantForm extends Form
{
    public function buildForm()
    {
        $this->formOptions =
        [
            'method' => 'POST',
            'url'    => route('commercants.store')
        ];

        $this
            ->add('email', 'email',
            [
                'label' => 'E-mail',
                'rules' => 'required|email',
                'error_messages' => 
                [
                    'email.required' => 'L\'adresse email est obligatoire.'
                ]
            ])
            ->add('nom', 'text',
            [
                'label' => 'Nom',
                'rules' => 'required|min:3'
            ])
            ->add('prenom', 'text',
            [
                'label' => 'Prénom',
                'rules' => 'required|min:3'
            ])
/*             ->add('activites', 'choice', 
            [
                'choices' => 
                [
                    '1' => 'Boulangerie'
                    '2' => 'Biscuiterie',
                    '3' => 'Apiculture',
                ],

                'choice_options' => 
                [
                    'wrapper' => ['class' => 'choice-wrapper'],
                    'label_attr' => ['class' => 'label-class'],
                ],

                'selected' => ['1', '2'],
                'expanded' => true,
                'multiple' => true
            ]) */
            ->add('submit', 'submit',
            [
                'label' => 'Envoyer'
            ]);
    }
}
