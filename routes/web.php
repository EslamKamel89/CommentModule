<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EpisodeController;
use Illuminate\Support\Facades\Route;

Route::view( '/', 'welcome' );

Route::view( 'dashboard', 'dashboard' )
	->middleware( [ 'auth', 'verified' ] )
	->name( 'dashboard' );

Route::view( 'profile', 'profile' )
	->middleware( [ 'auth' ] )
	->name( 'profile' );

Route::get( '/articles/{article:slug}', ArticleController::class)->name( 'articles.index' );
Route::get( '/episodes/{episode:slug}', EpisodeController::class)->name( 'episodes.index' );
require __DIR__ . '/auth.php';
