<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Title;
use Jantinnerezo\LivewireAlert\LivewireAlert;

#[Title('Detail Forum')]

class DetailPost extends Component
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
        return view('livewire.detail-post');
    }
}
