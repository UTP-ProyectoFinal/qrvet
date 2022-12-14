<?php

namespace App\Http\Controllers;

use App\Models\Atenciones;
use App\Models\Diagnosticos;
use App\Models\Historias;
use App\Models\Procedimientos;
use Illuminate\Http\Request;

class HistoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = $_GET['id'];
        $historia = new Historias();
        $diagnostico=Diagnosticos::pluck('v_nombre','id');
        $procedimiento=Procedimientos::pluck('v_nombre','id');
        return view('Historias.create',compact('historia', 'diagnostico','procedimiento', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Historias::$rules);

        Historias::create($request->all());

        return redirect()->route('Atenciones')
            ->with('success', 'Historia creada satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Historias  $historias
     * @return \Illuminate\Http\Response
     */
    public function show(Historias $historias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Historias  $historias
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $historia = Historias::find($id);
        $diagnostico=Diagnosticos::pluck('v_nombre','id');
        $procedimiento=Procedimientos::pluck('v_nombre','id');
        $id = $historia->n_atencion;
        return view('Historias.create',compact('historia', 'diagnostico','procedimiento', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Historias  $historias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $historia = Historias::find($id);

        $historia->v_motivo = $request->v_motivo;
        $historia->n_peso = $request->n_peso;
        $historia->n_temp = $request->n_temp;
        $historia->n_frecresp = $request->n_frecresp;
        $historia->n_freccard = $request->n_freccard;
        $historia->v_detproced = $request->v_detproced;
        $historia->n_atencion = $request->n_atencion;
        $historia->n_diagnos = $request->n_diagnos;
        $historia->v_detdiagnos = $request->v_detdiagnos;
        $historia->n_procedimiento = $request->n_procedimiento;

        $historia->save();

        return redirect()->route('Atenciones')
            ->with('success', 'Historia creada satisfactoriamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Historias  $historias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Historias $historias)
    {
        //
    }
}
