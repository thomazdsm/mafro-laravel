<?php

namespace App\Http\Controllers\Evento;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request) : View
    {
        return view('evento.home.index');
    }
}
