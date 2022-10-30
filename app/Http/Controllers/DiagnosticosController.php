<?php

namespace App\Http\Controllers;

use App\Models\Diagnosticos;
use App\Models\Medicamentos;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiagnosticosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diagnosticos = Diagnosticos::all();
        return view('diagnosticos.index') ->with('diagnosticos',$diagnosticos);
        //return view('diagnosticos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('diagnosticos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apuntes' => 'required'
        ],[
            'nombre.required' => 'El nombre es requerido',
            'apuntes.required' => 'Los apuntes es requerido'

        ]);
        // try {
        $usuario = Auth::user();
        $date = date('Y-m-d H:i:s');
        $model = new Diagnosticos;
        $model->v_nombre = $request->nombre;
        $model->v_apuntes = $request->apuntes;
        $model->a_n_iduser = $usuario->getAuthIdentifier();
        $model->updated_at = Carbon::createFromFormat('Y-m-d H:i:s', $date)
            ->format('Y-m-d H:i:s');
        $model->created_at = Carbon::createFromFormat('Y-m-d H:i:s', $date)
            ->format('Y-m-d H:i:s');
        $model->save();
        return redirect()->route('Diagnosticos');
        //    return redirect()->route(empty('Alergias.create')? 'Alergias' :$slug)->with('success','Se ha registrado satisfactoriamente, en las proximas 24 horas nos estaremos comunicando con usted.');
        //}catch (QueryException $e) {
        //    return redirect()->route('Alergias.create');
        //}
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Diagnosticos  $diagnosticos
     * @return \Illuminate\Http\Response
     */
    public function show(Diagnosticos $diagnosticos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diagnosticos  $diagnosticos
     * @return \Illuminate\Http\Response
     */
    public function edit(Diagnosticos $diagnosticos)
    {
        return view('diagnosticos.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Diagnosticos  $diagnosticos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diagnosticos $diagnosticos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Diagnosticos  $diagnosticos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diagnosticos $diagnosticos)
    {
        //
    }
}
