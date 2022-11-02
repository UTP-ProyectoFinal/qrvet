<?php

namespace App\Http\Controllers;

use App\Models\Alergias;
use App\Models\Medicamentos;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MedicamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicamentos = Medicamentos::paginate();
        return view('Medicamentos.index', compact('medicamentos'))
            ->with('i', (request()->input('page', 1) - 1) * $medicamentos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicamento=new Medicamentos();
        $medico=User::pluck('name','id');
        return view('Medicamentos.create',compact('medicamento','medico'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Medicamentos::$rules);
        $id = Auth::id();
        $medicamentos['v_nombre'] = $request['v_nombre'];
        $medicamentos['v_apuntes'] = $request['v_apuntes'];
        $medicamentos['a_n_iduser'] = $id; /*** Este valor hay que cambiarlo por el usuario autenticado**/
        $medicamentos['n_estado'] = 1;
        Medicamentos::create($medicamentos);

        return redirect()->route('Medicamentos')
            ->with('success', 'Medicamento creado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medicamento = Medicamentos::find($id);

        return view('medicamentos.show', compact('medicamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicamento = Medicamentos::find($id);

        $medico = User::pluck('name','id');
        return view('medicamentos.edit', compact('medicamento','medico'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate(Medicamentos::$rules);
        $medicamento = Medicamentos::find($id);
        $medicamento->update($request->all());
        return redirect()->route('Medicamentos')
            ->with('success', 'Medicamento actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicamentos $medicamentos)
    {
        //
    }
}
