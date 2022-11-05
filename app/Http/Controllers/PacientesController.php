<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Models\Pacientes;
use App\Models\Razas;
use App\Models\Sexo;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Pacientes::paginate();

        return view('Pacientes.index', compact('pacientes'))
            ->with('i', (request()->input('page', 1) - 1) * $pacientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paciente=new Pacientes();
        $sexo=Sexo::pluck('v_decripc','id');
        $raza=Razas::pluck('v_nombre','id');
        $cliente=Clientes::pluck('v_nombre','id');
        return view('Pacientes.create',compact('paciente','sexo','raza','cliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Pacientes::$rules);

        $paciente = Pacientes::create($request->all());

        return redirect()->route('Pacientes')
            ->with('success', 'Paciente creado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente = Pacientes::find($id);
        return view('pacientes.show', compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = Pacientes::find($id);
        $sexo=Sexo::pluck('v_decripc','id');
        $raza=Razas::pluck('v_nombre','id');
        $cliente=Clientes::pluck('v_nombre','id');
        return view('pacientes.editar', compact('paciente','sexo','raza','cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate(Pacientes::$rules);
        $paciente = Pacientes::find($id);
        $paciente->update($request->all());
        return redirect()->route('Pacientes')
            ->with('success', 'Cliente actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pacientes $pacientes)
    {
        //
    }
}
