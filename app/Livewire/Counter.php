<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
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
