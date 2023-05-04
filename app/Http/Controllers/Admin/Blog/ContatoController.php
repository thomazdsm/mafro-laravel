<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Models\Contato;
use App\Models\Pais;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ContatoController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contatos = Contato::all();

        foreach ($contatos as $contato){
            $contato->localizacao = $contato->rua.', '.$contato->numero.' - '.$contato->cidade.' - '.$contato->estado;
        }

        return view('admin.blog.contato.index', compact('contatos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $paises = Pais::all();
        $contatos = Contato::all();
        return view('admin.blog.contato.create', compact('contatos', 'paises'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required',
                'subtitle' => 'required|min:3|max:200',
                'email' => 'required',
                'telefone' => 'required',
                'mapframe' => 'required'
            ]);

            DB::beginTransaction();

            $primeiros_digitos = substr($request->telefone, 0, 4);
            $primeiros_digitos_sem_zeros = str_replace('0', '', $primeiros_digitos);
            $request->telefone = $primeiros_digitos_sem_zeros . substr($request->telefone, 4);

            $postData = [
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'rua' => $request->rua,
                'numero' => $request->numero,
                'bairro' => $request->bairro,
                'cidade' => $request->cidade,
                'estado' => $request->estado,
                'pais' => $request->pais,
                'email' => $request->email,
                'telefone' => $request->telefone,
                'mapframe' => $request->mapframe
            ];

            Contato::create($postData);
            DB::commit();

            return redirect()->route('contato.index')->with('success', 'Contato criado com sucesso!');
        } catch (\Exception $e) {
            DB::rollBack();
            //throw $e;
            return redirect()->route('admin.blog')->with('success', 'Erro ao criar o contato!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Contato $contato) : View
    {
        return view('admin.blog.contato.show', compact('contato'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contato $contato) : View
    {
        return view('admin.blog.contato.edit', compact('contato'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contato $contato) : RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required|min:3|max:200',
            'email' => 'required',
            'telefone' => 'required',
            'mapframe' => 'required'
        ]);

        try {
            $contato->update($request->all());

            return redirect()->route('contato.index')->with('success', 'Contato editado com sucesso!');
        } catch (Exception $e){
            DB::rollBack();
            //throw $e;
            return redirect()->route('admin.blog')->with('success', 'Erro ao editar o Contato!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contato $contato) : RedirectResponse
    {
        $contato->delete();

        return redirect()->route('contato.index')->with('success', 'Contato excluído com sucesso!');
    }
}
