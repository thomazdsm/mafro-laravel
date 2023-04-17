<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Biblioteca;
use App\Models\Categoria;
use App\Models\Contato;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::latest()->paginate(5);
        $categorias = Categoria::all();
        $biblioteca = Biblioteca::all();
        $contato = Contato::first();

        if($contato){
            $contato->localizacao = $contato->rua.', '.$contato->numero.' - '.$contato->cidade.' - '.$contato->estado;
        }

        foreach ($biblioteca as $livro) {
            $livro->tag = Categoria::where('filter_tag',$livro->filter_tag)->pluck('title')[0];
        }

        return view('blog.index', compact('posts', 'categorias', 'biblioteca', 'contato'));
    }
}
