<?php

namespace App\Http\Controllers\Admin\Evento;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\TipoEvento;
use App\Models\TipoTransmissao;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use PHPUnit\Logging\Exception;

class TipoEventoController extends Controller
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
        $tipoEvento = TipoEvento::all();
        return view('admin.evento.tipo_evento.index', compact('tipoEvento'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('admin.evento.tipo_evento.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'name' => 'required|min:3|max:15'
        ]);

        try {
            DB::beginTransaction();

            $postData = [
                'name' => $request->name
            ];

            TipoEvento::create($postData);
            DB::commit();

            return redirect()->route('tipo_evento.index')->with('success', 'Tipo de Evento criado com sucesso!');
        } catch (Exception $e) {
            DB::rollBack();
            //throw $e;
            return redirect()->route('evento.index')->with('success', 'Erro ao criar o Tipo de Evento!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(TipoEvento $tipoEvento) : View
    {
        return view('admin.evento.tipo_evento.show', compact('tipoEvento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoEvento $tipoEvento) : View
    {
        return view('admin.evento.tipo_evento.edit', compact('tipoEvento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipoEvento $tipoEvento) : RedirectResponse
    {
        $request->validate([
            'name' => 'required|min:3|max:15'
        ]);

        try {
            $tipoEvento->update($request->all());

            return redirect()->route('tipo_evento.index')->with('success', 'Tipo de Evento editado com sucesso!');
        } catch (Exception $e) {
            DB::rollBack();
            //throw $e;
            return redirect()->route('evento.index')->with('success', 'Erro ao criar o Tipo de Evento!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoEvento $tipoEvento) : RedirectResponse
    {
        try {
            $tipoEvento->delete();
            return redirect()->route('tipo_evento.index')->with('success', 'Tipo de Evento excluído com sucesso!');
        } catch (Exception $e) {
            DB::rollBack();
            //throw $e;
            return redirect()->route('evento.index')->with('success', 'Erro ao excluir o Tipo de Evento!');
        }
    }
}
