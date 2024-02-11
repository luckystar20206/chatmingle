<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class Counter extends Component
{
    use LivewireAlert;

    public $count = 0;
    

    public function increment()
    {
        $this->count++;;
    }

    public function resetIncrement()
    {
        $this->count = 0;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
