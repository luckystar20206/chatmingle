<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class ForumDiscussion extends Component
{
    public function render()
    {
        $user = auth()->user();
        $posts = Post::with('users')
            ->where('user_id', $user->id)
            ->get();

        return view('livewire.forum-discussion', ['posts' => $posts]);
    }
}
