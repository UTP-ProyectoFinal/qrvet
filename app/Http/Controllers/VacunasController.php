<?php

namespace App\Http\Controllers;

use App\Models\Medicamentos;
use App\Models\Vacunas;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VacunasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacunas = Vacunas::all();
        return view('vacunas.index') ->with('vacunas',$vacunas);
        //return view('vacunas.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vacunas.create');

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
            'expira' => 'required'
        ],[
            'nombre.required' => 'El nombre es requerido',
            'apuntes.required' => 'Los apuntes es requerido',
            'expira.required' => 'La fecha de expiración es requerido'

        ]);
        // try {
        $usuario = Auth::user();
        $date = date('Y-m-d H:i:s');
        $model = new Vacunas;
        $model->v_nombre = $request->nombre;
        $model->v_apuntes = $request->apuntes;
        $model->n_expira = $request->expira;
        $model->a_n_iduser = $usuario->getAuthIdentifier();
        $model->updated_at = Carbon::createFromFormat('Y-m-d H:i:s', $date)
            ->format('Y-m-d H:i:s');
        $model->created_at = Carbon::createFromFormat('Y-m-d H:i:s', $date)
            ->format('Y-m-d H:i:s');
        $model->save();
        return redirect()->route('Vacunas');
        //    return redirect()->route(empty('Alergias.create')? 'Alergias' :$slug)->with('success','Se ha registrado satisfactoriamente, en las proximas 24 horas nos estaremos comunicando con usted.');
        //}catch (QueryException $e) {
        //    return redirect()->route('Alergias.create');
        //}
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vacunas  $vacunas
     * @return \Illuminate\Http\Response
     */
    public function show(Vacunas $vacunas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vacunas  $vacunas
     * @return \Illuminate\Http\Response
     */
    public function edit(Vacunas $vacunas)
    {
        return view('vacunas.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vacunas  $vacunas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacunas $vacunas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vacunas  $vacunas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacunas $vacunas)
    {
        //
    }
}
