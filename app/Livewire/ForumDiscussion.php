<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Validation\ValidationException;

class ForumDiscussion extends Component
{
    use LivewireAlert;

    #[Validate]
    /**
     * define public variables
     *
     */

    public $title, $body, $user_id = '';

    /**
     * Method rules for validation
     *
     * @return void
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:255|alpha_dash',
            'body' =>    'required|string|alpha_dash',
        ];
    }

    public function storePost()
    {
        try {

            $id = Auth::user()->id;
            $validated = $this->validate();


            $post = Post::create([
                'title' => $validated['title'],
                'body' => $validated['body'],
                'user_id' => $id
            ]);

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

    public function render()
    {
        return view('livewire.forum-discussion', ['posts' => Post::all()]);
    }
}
