<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Media;
use App\Models\Post;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $categorias = Categoria::all();
        return view('admin.blog.categoria.index', compact('categorias'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('admin.blog.categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'title' => 'required|min:3|max:15'
        ]);

        try {
            DB::beginTransaction();

            $postData = [
                'title' => $request->title,
                'filter_tag' => 'filter-'. substr(sha1($request->title), 40 - min(6,40))
            ];

            Categoria::create($postData);
            DB::commit();

            return redirect()->route('categorias.index')->with('success', 'Categoria criada com sucesso!');
        } catch (Exception $e) {
            DB::rollBack();
            //throw $e;
            return redirect()->route('admin.blog')->with('success', 'Erro ao criar o Categoria!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria) : View
    {
        return view('admin.blog.categoria.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria) : RedirectResponse
    {
        $request->validate([
            'title' => 'required'
        ]);

        try {
            $categoria->update($request->all());

            return redirect()->route('categorias.index')->with('success', 'Post editado com sucesso!');
        } catch (Exception $e){
            DB::rollBack();
            //throw $e;
            return redirect()->route('admin.blog')->with('success', 'Erro ao editar o Categoria!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria) : RedirectResponse
    {
        $categoria->delete();

        return redirect()->route('categorias.index')->with('success', 'Categoria excluída com sucesso!');
    }
}
