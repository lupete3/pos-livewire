<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Profile extends Component
{
    public $name;
    public $email;
    public $password;
    public User $user;
    public $successMessage = '';

    public function update()
    {
        $valid = $this->validate([
            'email' => 'required|email',
            'name' => 'required',
            'password' => ''
        ],[
            'email.required' => 'Entrer une adresse email',
            'email.email' => 'Email est invalide',
            'name.required' => 'Entrer votre nom'
        ]);

        if (!isset($this->password)) {
            unset($valid['password']);
        }

        $this->user->update($valid);

        $this->password = '';

        $this->successMessage = "Votre profile a été mis à jour";

    }

    public function mount()
    {
        $user = Auth::user();

        $this->user = User::find($user->id);
        $this->name = $user->name;
        $this->email = $user->email;

    }

    public function render()
    {
        return view('livewire.auth.profile');
    }
}
