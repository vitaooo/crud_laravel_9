<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create(Request $request) {
        $new_post = [
            'title' => 'Meu primeiro post',
            'content' => 'Conteúdo qualquer',
            'author' => 'Alessandro'
        ];

        // forma mais convencional de criar um registro no banco. 
        // $post = new Post($new_post);
        // $post->save();

        $post = new post();

        $post->title = 'Meu primeiro post';
        $post->content = 'Conteúdo dualquer';
        $post->author = 'Elassondra';

        dd($post);
    }
}
