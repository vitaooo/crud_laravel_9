<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * listar todos os dados do nosso resource.
     *  praticamente igual a rota all()
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return $posts;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // no futuro vai só abrir formulário;
        $post = new post();

        $post->title = 'Meu primeiro post';
        $post->content = 'Conteúdo dualquer';
        $post->author = 'Elassondra';
        $post->save();

        return $post;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // no futuro receberá um post com um novo recurso.
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = new Post();

        $post = $post->find($id); // posso usar where(); ou find();
                        // find sempre procura a chave primária

        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // no futuro exibirá um formulário para alterar conteúdos. tipo POST
        $posts = Post::find($id)->update([
            'author' => 'Desconhecido',
            'title' => 'Alterado'
        ]);

        return $posts;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // no futuro usará o POST recebido do edit através do método GET e irá alterar o banco de dados.
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // destrói
        $post = Post::find($id)->delete();
        return $post;
    }
}
