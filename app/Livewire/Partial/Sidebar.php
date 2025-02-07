<?php

namespace App\Livewire\Partial;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Sidebar extends Component
{
    public function logout()
    {
        Auth::logout();
        $this->redirect(route('login'), true);
    }

    public function render()
    {
        return view('livewire.partial.sidebar');
    }
}
