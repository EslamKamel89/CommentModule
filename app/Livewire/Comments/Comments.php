<?php

namespace App\Livewire\Comments;

use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class Comments extends Component {
	public ?Model $model = null;
	public function render() {
		$comments = $this->model?->comments()->parent()->latest()->get();
		return view( 'livewire.comments.comments', [ 
			'comments' => $comments ?? [],
		] );
	}
}
