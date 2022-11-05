<?php

namespace App\Http\Controllers;

use App\Models\Alergias;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;

class AlergiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alergias = Alergias::paginate();

        return view('alergias.index', compact('alergias'))
            ->with('i', (request()->input('page', 1) - 1) * $alergias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alergia=new Alergias();
        $medico=User::pluck('name','id');
        return view('alergias.create',compact('alergia','medico'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Alergias::$rules);
        $id = Auth::id();
        $alergias['v_nombre'] = $request['v_nombre'];
        $alergias['v_apuntes'] = $request['v_apuntes'];
        $alergias['a_n_iduser'] =$id; /*** Este valor hay que cambiarlo por el usuario autenticado**/
        $alergias['n_estado'] = 1;
        Alergias::create($alergias);

        return redirect()->route('Alergias')
            ->with('success', 'Alergia creada satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alergias  $alergias
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alergia = Alergias::find($id);

        return view('alergias.show', compact('alergia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alergias  $alergias
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alergia = Alergias::find($id);

        $medico = User::pluck('name','id');
        return view('alergias.edit', compact('alergia','medico'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alergias  $alergias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ido = Auth::id();
        request()->validate(Alergias::$rules);
        $alergia = Alergias::find($id);
        $alergia['v_nombre'] = $request['v_nombre'];
        $alergia['v_apuntes'] = $request['v_apuntes'];
        $alergia['a_n_iduser'] = $ido; /*** Este valor hay que cambiarlo por el usuario autenticado**/
        $alergia['n_estado'] = 1;
        $alergia->update($request->all());
        return redirect()->route('Alergias')
            ->with('success', 'Alergia actualizada satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alergias  $alergias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alergias $alergias)
    {
        //
    }
}
