<?php

namespace App\Http\Controllers;

use App\Models\Especies;
use App\Models\Procedimientos;
use App\Models\Razas;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('Razas.create',compact('raza','medico'));
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
    public function edit(Razas $razas)
    {
        return view('razas.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Razas  $razas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Razas $razas)
    {
        //
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
