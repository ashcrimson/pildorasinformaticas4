<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        //$request->session()->put(['Felipe Pino'=>'Administrador']);

        //session(['María'=>'Estudiante']);

        //$request->session()->flush();

        //$request->session()->flash('Entrada13', 'Éxito 13');

        //$request->session()->reflash();

        //$request->session()->keep(['Alejandro', 'Administrador']);

        $request->session()->regenerate();

        return $request->session()->all();
    }
}
