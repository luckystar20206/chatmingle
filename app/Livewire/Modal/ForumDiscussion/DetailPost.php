<?php

namespace App\Livewire\Modal\ForumDiscussion;

use App\Models\Post;
use LivewireUI\Modal\ModalComponent;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class DetailPost extends ModalComponent
{

    use LivewireAlert;

    public $post;

    protected $listeners = [
        'confirmed'
    ];

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function confirmed()
    {
        try {
            $this->post->delete();

            $this->flash('success', 'Success deleted post !', [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);

            $this->redirect('/forum');
        } catch (\Throwable $th) {
            $this->alert('error', 'Delete Error!', [
                'text' => $th,
                'position' => 'center',
                'showConfirmButton' => true,
                'toast' => false,
                'timer' => false,
                'timerProgressBar' => false,
            ]);
        }
    }

    public function delete()
    {
        $this->alert('warning', 'Post', [
            'position' => 'center',
            'timer' => false,
            'toast' => false,
            'showConfirmButton' => true,
            'onConfirmed' => 'confirmed',
            'input' => 'id',
            'text' => 'Are you want to delete the post !',
            'confirmButtonText' => 'Yes',
            'showDenyButton' => true,
            'onDenied' => '',
            'denyButtonText' => 'No',
        ]);
    }

    public function render()
    {
        return view('livewire.modal.forum-discussion.detail-post');
    }
}
