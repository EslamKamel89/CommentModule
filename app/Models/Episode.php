<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Database\Factories\EpisodeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Episode newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Episode newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Episode query()
 * @mixin \Eloquent
 */
class Episode extends Model {
	/** @use HasFactory<\Database\Factories\EpisodeFactory> */
	use HasFactory;
	protected $fillable = [ 
		'name',
		'slug',
	];
}
