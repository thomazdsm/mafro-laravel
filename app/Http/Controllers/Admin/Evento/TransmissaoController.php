<?php

namespace App\Http\Controllers\Admin\Evento;

use App\Http\Controllers\Controller;
use App\Models\TipoTransmissao;
use App\Models\Transmissao;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use PHPUnit\Logging\Exception;

class TransmissaoController extends Controller
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
        $transmissoes = Transmissao::with('tipo_transmissao')->get();

        return view('admin.evento.transmissao.index', compact('transmissoes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        $tipoTransmissao = TipoTransmissao::all();
        return view('admin.evento.transmissao.create', compact('tipoTransmissao'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        // TODO: verificar a chave estrangeira > tipo_transmissao
        $request->validate([
            'titulo' => 'required',
            'tipo_transmissao_id' => 'required',
            'url_transmissao' => 'required'
        ]);

        try {
            DB::beginTransaction();

            $postData = [
                'titulo' => $request->titulo,
                'tipo_transmissao_id' => $request->tipo_transmissao_id,
                'url_transmissao' => $request->url_transmissao,
                'detalhes' => $request->detalhes
            ];

            Transmissao::create($postData);
            DB::commit();

            return redirect()->route('transmissao.index')->with('success', 'Transmissão criada com sucesso!');
        } catch (Exception $e) {
            DB::rollBack();
            //throw $e;
            return redirect()->route('evento.index')->with('success', 'Erro ao criar a Transmissão!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Transmissao $transmissoes) : View
    {
        return view('admin.evento.transmissao.show', compact('transmissoes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transmissao $transmissao) : View
    {
        $tipoTransmissao = TipoTransmissao::all();
        return view('admin.evento.transmissao.edit', compact('transmissao', 'tipoTransmissao'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transmissao $transmissao) : RedirectResponse
    {
        // TODO: verificar a chave estrangeira > tipo_transmissao
        $request->validate([
            'titulo' => 'required',
            'tipo_transmissao_id' => 'required',
            'url_transmissao' => 'required'
        ]);

        try {
            $transmissao->update($request->all());

            return redirect()->route('transmissao.index')->with('success', 'Transmissão editada com sucesso!');
        } catch (Exception $e) {
            DB::rollBack();
            //throw $e;
            return redirect()->route('evento.index')->with('success', 'Erro ao editar a Transmissão!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transmissao $transmissao) : RedirectResponse
    {
        try {
            $transmissao->delete();
            return redirect()->route('transmissao.index')->with('success', 'Transmissão excluída com sucesso!');
        } catch (Exception $e) {
            DB::rollBack();
            //throw $e;
            return redirect()->route('evento.index')->with('success', 'Erro ao excluir a Transmissão!');
        }
    }
}
