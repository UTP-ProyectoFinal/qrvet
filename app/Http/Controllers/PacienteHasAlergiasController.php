<?php

namespace App\Http\Controllers;

use App\Models\Atenciones;
use App\Models\Clientes;
use App\Models\Pacientes;
use Illuminate\Support\Facades\Auth;
use App\Models\Alergias;
use App\Models\PacienteHasAlergias;
use Illuminate\Http\Request;

class PacienteHasAlergiasController extends Controller
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
        $pacienteHasAlergias = PacienteHasAlergias::where('n_paciente', $atencion->n_paciente)->get();
        $cliente = $atencion->cliente;
        $paciente = $atencion->paciente;
        $alergia =Alergias::pluck('v_nombre','id');
        return view('PacienteHasAlergias.create',compact('pacienteHasAlergias','alergia','cliente','paciente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PacienteHasAlergias::$rules);
        $id = Auth::id();
        $pacienteHasAlergias = new PacienteHasAlergias();
        $pacienteHasAlergias['n_alergia'] = $request->n_alergia;
        $pacienteHasAlergias['n_paciente'] = $request->paciente_id;
        $pacienteHasAlergias['a_n_iduser'] = $id;

        $pacienteHasAlergias->save();

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
