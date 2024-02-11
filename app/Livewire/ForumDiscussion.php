<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ForumDiscussion extends Component
{
    use LivewireAlert;

    public function render()
    {
        return view('livewire.forum-discussion');
    }
}
