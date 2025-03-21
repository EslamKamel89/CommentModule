<?php

namespace App\Livewire\Comments;

use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class Comments extends Component {
    public ?Model $model = null;

    /** @var array{body:string} */
    public array $newCommentState = ['body' => ''];

    public function render() {
        $comments = $this->model?->comments()->onlyParent()->latest()->get();
        return view('livewire.comments.comments', [
            'comments' => $comments ?? [],
        ]);
    }

    public function postComment() {
        $this->validate([
            'newCommentState.body' => ['required', 'min:3', 'max:255'],
        ], [
            'newCommentState.body.required' => 'You cant leave the comment empty',
            'newCommentState.body.min' => 'The comment cant be less than 3 chars',
            'newCommentState.body.max' => 'The comment body cant be more than 255 chars',
        ]);
        $this->model->comments()->create([
            'user_id' => auth()->id(),
            'body' => $this->newCommentState['body'],
        ]);
        $this->newCommentState['body'] = '';
    }
}
