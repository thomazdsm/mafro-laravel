<?php

namespace App\Http\Controllers\Admin\Evento;

use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Controller;
use App\Models\Certificado;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use PHPUnit\Logging\Exception;

class CertificadoController extends Controller
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
        $certificados = Certificado::all();
        return view('admin.evento.certificado.index', compact('certificados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('admin.evento.certificado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        dd($request);
        exit();
        //TODO: verificar o background
        $request->validate([
            'titulo' => 'required',
            'background_img' => 'required'
        ]);

        try {
            DB::beginTransaction();

            $postData = [
                'titulo' => $request->title,
                'descricao' => $request->descricao
            ];

            //$background = UploadController::store($request->file('background_img'),"/certificado");
            //dd($background);
            exit();

            Certificado::create($postData);
            DB::commit();

            return redirect()->route('certificado.index')->with('success', 'Certificado criado com sucesso!');
        } catch (Exception $e) {
            DB::rollBack();
            //throw $e;
            return redirect()->route('evento.index')->with('success', 'Erro ao criar o Certificado!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Certificado $certificado) : View
    {
        return view('admin.blog.certificado.show', compact('certificado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Certificado $certificado) : View
    {
        return view('admin.blog.certificado.edit', compact('certificado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Certificado $certificado) : RedirectResponse
    {
        //TODO: verificar o background
        $request->validate([
            'titulo' => 'required'
        ]);

        try {
            $certificado->update($request->all());

            return redirect()->route('certificado.index')->with('success', 'Certificado editado com sucesso!');
        } catch (Exception $e){
            DB::rollBack();
            //throw $e;
            return redirect()->route('evento.index')->with('success', 'Erro ao editar o Certificado!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certificado $certificado) : RedirectResponse
    {
        $certificado->delete();
        return redirect()->route('certificado.index')->with('success', 'Certificado excluído com sucesso!');
    }
}
