<?php

namespace App\Http\Controllers;

use App\Models\Alergias;
use App\Models\Atenciones;
use App\Models\PacienteHasAlergias;
use App\Models\PacienteHasVacunas;
use App\Models\Vacunas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PacienteHasVacunasController extends Controller
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
        $id = $_GET['id'];
        $atencion = Atenciones::find($id);
        $pacienteHasVacunas = PacienteHasVacunas::where('n_paciente', $atencion->n_paciente)->get();
        $cliente = $atencion->cliente;
        $paciente = $atencion->paciente;
        $vacunas =Vacunas::pluck('v_nombre','id');
        return view('PacienteHasVacunas.create',compact('pacienteHasVacunas','vacunas','cliente','paciente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PacienteHasVacunas::$rules);
        $id = Auth::id();
        $pacienteHasVacunas = new PacienteHasVacunas();
        $pacienteHasVacunas['n_vacuna'] = $request->n_vacuna;
        $pacienteHasVacunas['n_paciente'] = $request->paciente_id;
        $pacienteHasVacunas['a_n_iduser'] = $id;

        $pacienteHasVacunas->save();

        return redirect()->route('Atenciones')
            ->with('success', 'Alergias de paciente se ha añadido satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PacienteHasAlergias  $pacienteHasAlergias
     * @return \Illuminate\Http\Response
     */
    public function show(PacienteHasAlergias $pacienteHasAlergias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PacienteHasAlergias  $pacienteHasAlergias
     * @return \Illuminate\Http\Response
     */
    public function edit(PacienteHasAlergias $pacienteHasAlergias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PacienteHasAlergias  $pacienteHasAlergias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PacienteHasAlergias $pacienteHasAlergias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PacienteHasAlergias  $pacienteHasAlergias
     * @return \Illuminate\Http\Response
     */
    public function destroy(PacienteHasAlergias $pacienteHasAlergias)
    {
        //
    }
}
