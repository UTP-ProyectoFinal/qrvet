<?php

namespace App\Http\Controllers;

use App\Models\Medicamentos;
use App\Models\Procedimientos;
use App\Models\User;
use App\Models\Vacunas;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProcedimientosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $procedimientos = Procedimientos::paginate();
        return view('procedimientos.index', compact('procedimientos'))
            ->with('i', (request()->input('page', 1) - 1) * $procedimientos->perPage());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $procedimiento=new Procedimientos();
        $medico=User::pluck('name','id');
        return view('procedimientos.create',compact('procedimiento','medico'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Procedimientos::$rules);
        $id = Auth::id();
        $procedimientos['v_nombre'] = $request['v_nombre'];
        $procedimientos['v_apuntes'] = $request['v_apuntes'];
        $procedimientos['n_notifica'] = $request['n_notifica'];
        $procedimientos['a_n_iduser'] = $id; /*** Este valor hay que cambiarlo por el usuario autenticado**/
        $procedimientos['n_estado'] = 1;


        Procedimientos::create($procedimientos);

        return redirect()->route('Procedimientos')
            ->with('success', 'Procedimiento creado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Procedimientos  $procedimientos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $procedimiento = Procedimientos::find($id);

        return view('procedimientos.show', compact('procedimiento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Procedimientos  $procedimientos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $procedimiento = Procedimientos::find($id);

        $medico = User::pluck('name','id');
        return view('procedimientos.edit', compact('procedimiento','medico'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Procedimientos  $procedimientos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ido = Auth::id();
        request()->validate(Procedimientos::$rules);
        $procedimiento = Procedimientos::find($id);
        $procedimiento['v_nombre'] = $request['v_nombre'];
        $procedimiento['v_apuntes'] = $request['v_apuntes'];
        $procedimiento['n_notifica'] = $request['n_notifica'];
        $procedimiento['a_n_iduser'] = $ido; /*** Este valor hay que cambiarlo por el usuario autenticado**/
        $procedimiento['n_estado'] = 1;
        $procedimiento->update($request->all());
        return redirect()->route('Procedimientos')
            ->with('success', 'Procedimiento actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Procedimientos  $procedimientos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Procedimientos $procedimientos)
    {
        //
    }
}
