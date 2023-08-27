<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;
use Illuminate\Support\Carbon;

class Comments extends Component
{
    public $comments;
    public $newComment;

    // READ
    public function mount()
    {
        $initialComments = Comment::orderBy('created_at', 'desc')->get();
        $this->comments = $initialComments;
    }

    // CREATE
    public function addComment()
    {
        if ($this->newComment == '') return;
        $comment = Comment::create(['body' => $this->newComment, 'user_id' => 1]);
        $this->comments->prepend($comment);
        $this->newComment = '';
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
