<?php

namespace App\Http\Controllers\Admin\Evento;

use App\Http\Controllers\Controller;
use App\Models\Evento;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use PHPUnit\Logging\Exception;

class IndexController extends Controller
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
        $eventos = Evento::all();
        return view('admin.evento.index', compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('admin.evento.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        throw new Exception('Not Implemented!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Evento $evento) : View
    {
        return view('admin.evento.show', compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evento $evento) : View
    {
        return view('admin.evento.edit', compact('evento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evento $evento) : RedirectResponse
    {
        throw new Exception('Not Implemented!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evento $evento) : RedirectResponse
    {
        throw new Exception('Not Implemented!');
    }
}
