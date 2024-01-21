<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Register')]
class Register extends Component
{
    public function render()
    {
        return view('livewire.register');
    }
}
