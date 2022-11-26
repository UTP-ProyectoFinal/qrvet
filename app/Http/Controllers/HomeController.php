<?php

namespace App\Http\Controllers;

use App\Models\Pacientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
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
        $id = Auth::id();
        $url = env('APP_URL', 'http://localhost/qrvet/public/');
        if( is_null($id) )
        {
            return response()->json(['status'=>200, 'url' => $url.'Pacientes/nologin/'.$paciente->id]);
        }
        return response()->json(['status'=>200, 'url' => $url.'Pacientes/'.$paciente->id]);
    }

    public function validarqr2(string $identificador){
        $paciente = Pacientes::where('v_identifica', $identificador)->first();
        if( is_null($paciente) ) {
            return response()->json(['status' => 400,]);
        }
        $id = Auth::id();
        $url = env('APP_URL', 'http://localhost/qrvet/public/');
        if( is_null($id) )
        {
            return redirect()->route('noLogueado', ['id' => $paciente->id]);
        }
        return redirect()->route('Pacientes.show', ['Paciente' => $paciente->id]);
    }
}
