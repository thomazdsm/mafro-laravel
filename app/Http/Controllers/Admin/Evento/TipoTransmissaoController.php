<?php

namespace App\Http\Controllers\Admin\Evento;

use App\Http\Controllers\Controller;
use App\Models\TipoTransmissao;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use PHPUnit\Logging\Exception;

class TipoTransmissaoController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin');
    }
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $tipoTransmissao = TipoTransmissao::all();
        return view('admin.evento.tipo_transmissao.index', compact('tipoTransmissao'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('admin.evento.tipo_transmissao.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'titulo' => 'required|min:3|max:100'
        ]);

        try {
            DB::beginTransaction();

            $postData = [
                'titulo' => $request->titulo
            ];

            TipoTransmissao::create($postData);
            DB::commit();

            return redirect()->route('tipo_transmissao.index')->with('success', 'Tipo de Transmissão criado com sucesso!');
        } catch (Exception $e) {
            DB::rollBack();
            //throw $e;
            return redirect()->route('evento.index')->with('success', 'Erro ao criar o Tipo de Transmissão!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(TipoTransmissao $tipoTransmissao) : View
    {
        return view('admin.evento.tipo_transmissao.show', compact('tipoTransmissao'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoTransmissao $tipoTransmissao) : View
    {
        return view('admin.evento.tipo_transmissao.edit', compact('tipoTransmissao'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipoTransmissao $tipoTransmissao) : RedirectResponse
    {
        $request->validate([
            'titulo' => 'required'
        ]);

        try {
            $tipoTransmissao->update($request->all());

            return redirect()->route('tipo_transmissao.index')->with('success', 'Tipo de Transmissão editado com sucesso!');
        } catch (Exception $e){
            DB::rollBack();
            //throw $e;
            return redirect()->route('evento.index')->with('success', 'Erro ao editar o Tipo de Transmissão!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoTransmissao $tipoTransmissao) : RedirectResponse
    {
        $tipoTransmissao->delete();
        return redirect()->route('tipo_transmissao.index')->with('success', 'Tipo de Transmissão excluído com sucesso!');
    }
}
