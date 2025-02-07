<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email = 'admin@gmail.com';
    public $password = '12345678';
    public $errorMessage = '';

    public function login()
    {
        $valid = $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ],[
            'email.required' => 'Entrer une adresse mail',
            'email.email' => 'Email est invalide',
            'password.required' => 'Entrer un mot de passe'
        ]);

        if (Auth::attempt($valid)) {
            $this->redirect(route('home'), true);
        }else {
            // Si l'authentification échoue, définissez un message d'erreur
            $this->errorMessage = 'Coordonnées incorrectes. Veuillez réessayer.';
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
