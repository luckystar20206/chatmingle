<?php

namespace App\Livewire\Modal\ForumDiscussion;

use App\Models\Post;
use Illuminate\Support\Facades\Gate;
use LivewireUI\Modal\ModalComponent;

class DetailPost extends ModalComponent
{

    public $detail_post;

    public function mount(Post $detail_post)
    {
        $this->detail_post = $detail_post;
    }

    public function render()
    {
        return view('livewire.modal.forum-discussion.detail-post');
    }
}
