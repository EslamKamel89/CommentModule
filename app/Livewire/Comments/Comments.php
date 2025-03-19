<?php

namespace App\Livewire\Comments;

use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class Comments extends Component {
	public Model $model;
	public function render() {
		$comments = $this->model->comments;
		return view( 'livewire.comments.comments', [ 
			'comments' => $comments,
		] );
	}
}
