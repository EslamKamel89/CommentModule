<?php

namespace App\Livewire\Comments;

use Livewire\Component;
use App\Models\Comment as CommentModel;

class Comment extends Component {
    public CommentModel $comment;
    public function mount() {
        $this->comment->load(['children']);
        // dd($this->comment->children);
    }
    public function render() {
        return view('livewire.comments.comment');
    }
}
