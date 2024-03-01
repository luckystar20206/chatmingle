<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Title;


#[Title('Forum Discussion')]
class ForumDiscussion extends Component
{
    public function render()
    {
        $posts = Post::with('users')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('livewire.forum-discussion', ['posts' => $posts]);
    }
}
