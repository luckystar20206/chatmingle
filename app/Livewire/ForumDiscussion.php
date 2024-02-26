<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use App\Livewire\Forms\PostForm;
use Illuminate\Validation\ValidationException;
use Jantinnerezo\LivewireAlert\LivewireAlert;

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
