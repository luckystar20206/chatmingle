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
            'title' => 'required|max:255',
            'body' =>    'required',
        ];
    }

    public function replaceSpacesWithDash($title)
    {
        return str_replace(' ', '-', $title);
    }

    public function storePost()
    {

        $id = Auth::user()->id;
        $validated = $this->validate();
        $title = $this->replaceSpacesWithDash($validated['title']);


        $post = Post::create([
            'title' => $title,
            'body' => $validated['body'],
            'user_id' => $id
        ]);
    }
}
