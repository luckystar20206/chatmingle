<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Post;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class PostForm extends Form
{

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
        $id = Auth::user()->id;
        $validated = $this->validate();

        $post = Post::create([
            'title' => $validated['title'],
            'body' => $validated['body'],
            'user_id' => $id
        ]);
    }
}
