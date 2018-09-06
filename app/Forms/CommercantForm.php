<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use App\Activite;

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
            // Automatically generates the activities stored in db as checkboxs
            ->add('activites', 'entity',
            [
                'class' => Activite::class,
                'property' => 'nom',
                'expanded' => true,
                'multiple' => true
            ])

            ->add('submit', 'submit',
            [
                'label' => 'Envoyer'
            ]);
    }
}
