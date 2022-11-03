<?php

namespace App\Http\Controllers;

use App\Models\Especies;
use App\Models\Procedimientos;
use App\Models\Razas;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Termwind\Components\Raw;

class RazasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $razas = Razas::paginate();
        return view('Razas.index', compact('razas'))
            ->with('i', (request()->input('page', 1) - 1) * $razas->perPage());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $raza=new Razas();
        $medico=User::pluck('name','id');
        $especie=Especies::pluck('v_decripc','id');
        return view('Razas.create',compact('raza','medico','especie'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Razas::$rules);
        $id = Auth::id();
        $razas['v_nombre'] = $request['v_nombre'];
        $razas['v_apuntes'] = $request['v_apuntes'];
        $razas['n_especie'] = $request['n_especie'];
        $razas['a_n_iduser'] = $id; /*** Este valor hay que cambiarlo por el usuario autenticado**/
        $razas['n_estado'] = 1;
        Razas::create($razas);

        return redirect()->route('Razas')
            ->with('success', 'Raza creada satisfactoriamente.');
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
    public function edit($id)
    {
        $raza = Razas::find($id);
        $medico = User::pluck('name','id');
        $especie = Especies::pluck('v_decripc','id');
        return view('razas.edit',compact('raza','medico','especie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Razas  $razas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ido = Auth::id();
        request()->validate(Razas::$rules);
        $raza = Razas::find($id);
        $raza['v_nombre'] = $request['v_nombre'];
        $raza['v_apuntes'] = $request['v_apuntes'];
        $raza['n_especie'] = $request['n_especie'];
        $raza['a_n_iduser'] = $ido; /*** Este valor hay que cambiarlo por el usuario autenticado**/
        $raza['n_estado'] = 1;
        $raza->update($request->all());
        return redirect()->route('Razas')
            ->with('success', 'Raza actualizada satisfactoriamente');
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
