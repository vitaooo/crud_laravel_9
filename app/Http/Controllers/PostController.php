<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create(Request $request) {
        $post = new post();

        $post->title = 'Meu primeiro post';
        $post->content = 'Conteúdo dualquer';
        $post->author = 'Elassondra';
        $post->save();
    }
    public function read(Request $r) {
        $post = new Post();

        $post = $post->find(1); // posso usar where(); ou find();
                        // find sempre procura a chave primária

        return $post;
    }

    public function all(Request $r) {
        $posts = Post::all();

        return $posts;
    }

    public function update(Request $request) {
        $posts = Post::where('id','>',0)->update([
            'author' => 'Desconhecido'
        ]);

        return $posts;
    }

    public function delete(Request $request) {
        $post = Post::where('id','>',0)->delete();
        return $post;
    }
}
