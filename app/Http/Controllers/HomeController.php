<?php

namespace App\Http\Controllers;

use App\Models\Pacientes;
use Illuminate\Http\Request;

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
    public function index()
    {
        return view('admin.dashboard');
    }
    public function validarqr(Request $request){
        $qr=$request->qr_code;
        $paciente = Pacientes::where('v_identifica', $qr)->first();
        if( is_null($paciente) ) {
            return response()->json(['status' => 400,]);
        }
        return response()->json(['status'=>200,'id'=>$paciente->id]);
    }
}
