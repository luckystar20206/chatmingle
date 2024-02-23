<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use App\Livewire\Forms\PostForm;
use Illuminate\Validation\ValidationException;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ForumDiscussion extends Component
{

    use LivewireAlert;

    public PostForm $form;

    public function storePost()
    {
        try {
            $this->form->storePost();

            $this->alert('success', 'Success created new post !', [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        } catch (ValidationException $e) {
            $this->alert('error', 'Register Error!', [
                'text' => $e->validator->errors()->first(),
                'position' => 'center',
                'showConfirmButton' => true,
                'toast' => false,
                'timer' => false,
                'timerProgressBar' => false,
            ]);
        }
    }


    public function resetModal()
    {
        $this->title = '';
        $this->body = '';
        $this->user_id = '';
        $this->emit('');
    }


    public function render()
    {
        $user = auth()->user();
        $posts = Post::with('users')
            ->where('user_id', $user->id)
            ->get();

        return view('livewire.forum-discussion', ['posts' => $posts]);
    }
}
