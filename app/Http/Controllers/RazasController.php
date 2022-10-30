<?php

namespace App\Http\Controllers;

use App\Models\Procedimientos;
use App\Models\Razas;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RazasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $razas = Razas::all();
        return view('razas.index') ->with('razas',$razas);
      //  return view('razas.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('razas.create');
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
            'apuntes' => 'required',
            'especie' => 'required',
        ],[
            'nombre.required' => 'El nombre es requerido',
            'apuntes.required' => 'Los apuntes es requerido',
            'especie.required' => 'Los apuntes es requerido',

        ]);
        // try {
        $usuario = Auth::user();
        $date = date('Y-m-d H:i:s');
        $model = new Razas;
        $model->v_nombre = $request->nombre;
        $model->v_apuntes = $request->apuntes;
        $model->n_especie = $request->especie;
        $model->a_n_iduser = $usuario->getAuthIdentifier();
        $model->updated_at = Carbon::createFromFormat('Y-m-d H:i:s', $date)
            ->format('Y-m-d H:i:s');
        $model->created_at = Carbon::createFromFormat('Y-m-d H:i:s', $date)
            ->format('Y-m-d H:i:s');
        $model->save();
        return redirect()->route('Razas');
        //    return redirect()->route(empty('Alergias.create')? 'Alergias' :$slug)->with('success','Se ha registrado satisfactoriamente, en las proximas 24 horas nos estaremos comunicando con usted.');
        //}catch (QueryException $e) {
        //    return redirect()->route('Alergias.create');
        //}
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Razas  $razas
     * @return \Illuminate\Http\Response
     */
    public function show(Razas $razas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Razas  $razas
     * @return \Illuminate\Http\Response
     */
    public function edit(Razas $razas)
    {
        return view('razas.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Razas  $razas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Razas $razas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Razas  $razas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Razas $razas)
    {
        //
    }
}
