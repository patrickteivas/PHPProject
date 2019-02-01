<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = new Post();
        $post->title='Hello';
        $post->content='World';
        $post->author='Kaspar';
        $post->save();
        var_dump($post->toArray());
    }
}
