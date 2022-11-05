<?php

namespace App\Http\Controllers;

use App\Models\Alergias;
use App\Models\Diagnosticos;
use App\Models\Medicamentos;
use App\Models\User;
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
        $diagnosticos = Diagnosticos::paginate();

        return view('diagnosticos.index', compact('diagnosticos'))
            ->with('i', (request()->input('page', 1) - 1) * $diagnosticos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $diagnostico=new Diagnosticos();
        $medico=User::pluck('name','id');
        return view('diagnosticos.create',compact('diagnostico','medico'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        request()->validate(Diagnosticos::$rules);
        $id = Auth::id();
        $diagnosticos['v_nombre'] = $request['v_nombre'];
        $diagnosticos['v_apuntes'] = $request['v_apuntes'];
        $diagnosticos['a_n_iduser'] = $id; /*** Este valor hay que cambiarlo por el usuario autenticado**/
        $diagnosticos['n_estado'] = 1;
        Diagnosticos::create($diagnosticos);

        return redirect()->route('Diagnosticos')
            ->with('success', 'Diagnostico creado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Diagnosticos  $diagnosticos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diagnostico = Diagnosticos::find($id);
        return view('diagnosticos.show', compact('diagnostico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diagnosticos  $diagnosticos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $diagnostico = Diagnosticos::find($id);

        $medico = User::pluck('name','id');
        return view('diagnosticos.edit', compact('diagnostico','medico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Diagnosticos  $diagnosticos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ido = Auth::id();
        request()->validate(Diagnosticos::$rules);
        $diagnosticos = Diagnosticos::find($id);
        $diagnosticos['v_nombre'] = $request['v_nombre'];
        $diagnosticos['v_apuntes'] = $request['v_apuntes'];
        $diagnosticos['a_n_iduser'] = $ido; /*** Este valor hay que cambiarlo por el usuario autenticado**/
        $diagnosticos['n_estado'] = 1;
        $diagnosticos->update($request->all());
        return redirect()->route('Diagnosticos')
            ->with('success', 'Diagnostico actualizado satisfactoriamente');
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
