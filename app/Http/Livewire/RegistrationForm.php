<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RegistrationForm extends Component
{
    public $current_tab = 1;

    public function render()
    {
        return view('livewire.registration-form');
    }
}
