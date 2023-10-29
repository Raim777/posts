<?php

use Illuminate\Support\Facades\Route;
use Raim\Posts\Http\Controllers\PostController;
 
Route::get('/posts', [PostController::class, 'index']);
