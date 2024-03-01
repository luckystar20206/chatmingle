<?php

namespace App\Livewire\Modal\ForumDiscussion;

use Livewire\Component;
use App\Livewire\Forms\PostForm;
use LivewireUI\Modal\ModalComponent;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Validation\ValidationException;

class CreatePost extends ModalComponent
{

    use LivewireAlert;

    public PostForm $form;

    public function storePost()
    {
        try {
            $this->form->storePost();

            $this->flash('success', 'Success created new post !', [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);

            $this->redirectRoute('forum');
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
        return view('livewire.modal.forum-discussion.create-post');
    }
}
