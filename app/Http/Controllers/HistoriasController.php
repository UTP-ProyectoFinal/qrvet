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
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $historia=new Atenciones();
        $atencion=Historias::pluck('n_paciente','id');
        $diagnostico=Diagnosticos::pluck('v_nombre','id');
        $procedimiento=Procedimientos::pluck('v_nombre','id');
        return view('Historias.create',compact('historia','atencion','diagnostico','procedimiento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Atenciones::$rules);

        $paciente = Atenciones::create($request->all());

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
    public function edit(Historias $historias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Historias  $historias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Historias $historias)
    {
        //
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
