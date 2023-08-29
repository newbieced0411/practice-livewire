<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;

class Comments extends Component
{
    use WithPagination;
    use WithFileUploads;

    // public $comments;
    // READ
    // public function mount()
    // {
    //     $initialComments = Comment::latest()->get();
    //     $this->comments = $initialComments;
    // }

    public $newComment;
    public $image;
    public $ticketId;
    public $disabled = true;

    # Listener
    protected $listeners = [
        'fileUpload' => 'handleFileUpload',
        'ticketSelected',
    ];

    // real time validation
    public function updated($field)
    {
        $this->validateOnly($field, [
            'newComment' => 'required|max:255'
        ], [], [
            'newComment' => 'comment',
        ]);
    }

    // CREATE
    public function addComment()
    {
        $this->validate([
            'newComment' => 'required|max:255'
        ], [], [
            'newComment' => 'comment',
        ]);

        $image = $this->storeImage();
        $comment = Comment::create([
            'body' => $this->newComment,
            'user_id' => 1, 'image' => $image,
            'support_ticket_id' => $this->ticketId,
        ]);
        $this->newComment = '';
        $this->image = '';

        session()->flash('success', 'Comment created successfully');
    }

    # Events
    public function handleFileUpload($imageUpload)
    {
        $this->image = $imageUpload;
    }

    public function ticketSelected($ticketId)
    {
        $this->ticketId = $ticketId;
        $this->disabled = false;
    }

    public function storeImage()
    {
        if (!$this->image) return null;

        $img = ImageManagerStatic::make($this->image)->encode('jpg');
        $imgName = Str::random() . '.jpg';
        Storage::disk('public')->put($imgName, $img);

        return $imgName;
    }

    // Delete
    public function removeComment($commentId)
    {
        $comment = Comment::find($commentId);
        Storage::disk('public')->delete($comment->image);
        $comment->delete();

        session()->flash('delete', 'Comment deleted successfully');
    }

    public function render()
    {
        return view('livewire.home.comments', [
            'comments' => Comment::where('support_ticket_id', $this->ticketId)->latest()->paginate(10),
        ]);
    }
}
