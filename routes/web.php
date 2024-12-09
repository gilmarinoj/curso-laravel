<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', HomeController::class);

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/{id}', [PostController::class, 'show']);


Route::get('prueba', function(){
    
    /* Crear nuevo Post

    $post = new Post;

    $post->title = 'Prueba2';
    $post->content = 'Contenido de prueba2';
    $post->category = 'Categoria2';
    $post->save();

    return $post;

    */

    /* Actualizar Post

    $post = Post::find(1);
    $post->is_deleted = false;
    $post->save();

    return $post;

    */

    /* Listar Posts

    $posts = Post::where('is_deleted', false)->get();

    return $posts;

    */

});


