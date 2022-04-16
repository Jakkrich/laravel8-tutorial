<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function getAllPost()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }

    public function getPostById($id)
    {
        $post = Http::get('https://jsonplaceholder.typicode.com/posts/' . $id);
        return $post->json();
    }

    public function getAddPost()
    {
        $post = Http::post('https://jsonplaceholder.typicode.com/posts', [
            'userId' => 1,
            'title' => 'New post title',
            'body' => 'New body title'
        ]);
        return $post->json();
    }

    public function getUpdatePost()
    {
        $post = Http::put('https://jsonplaceholder.typicode.com/posts/1', [
            'title' => 'New Update post title',
            'body' => 'New Update body title'
        ]);
        return $post->json();
    }

    public function getDeletePost($id)
    {
        $post = Http::delete('https://jsonplaceholder.typicode.com/posts/' . $id);
        return $post->json();
    }
}
