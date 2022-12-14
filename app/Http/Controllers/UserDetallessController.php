<?php

namespace App\Http\Controllers;

use App\Models\UserDetalless;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Clinicas;
use App\Models\Perfiles;

class UserDetallessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalles = UserDetalless::paginate();

        return view('detalles.index', compact('detalles'))
            ->with('i', (request()->input('page', 1) - 1) * $detalles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detalle=new UserDetalless();
        $medico=User::pluck('name','id');
        $clinica=Clinicas::pluck('v_nomclin','id');
        $perfil=Perfiles::pluck('v_apuntes','id');
        return view('detalles.create',compact('alergia','medico','clinica','perfil'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //request()->validate(UserDetalle::$rules);

        $detalle = UserDetalless::create($request->all());

        return redirect()->route('Detalles')
            ->with('success', 'Detalles de Usuario creados satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserDetalle  $userDetalle
     * @return \Illuminate\Http\Response
     */
    public function show(UserDetalless $userDetalle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserDetalle  $userDetalle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detalle = UserDetalless::find($id);
       
        $medico = User::pluck('name','id');
        $clinica = Clinicas::pluck('v_nomclin','id');
        $perfil = Perfiles::pluck('v_apuntes','id');

        return view('detalles.edit', compact('alergia','medico','clinica','perfil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserDetalle  $userDetalle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //request()->validate(UserDetalle::$rules);
        $detalle = UserDetalless::find($id);
        $detalle->update($request->all());
        return redirect()->route('Detalles')
            ->with('success', 'Detalles actualizados satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserDetalle  $userDetalle
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserDetalless $userDetalle)
    {
        //
    }
}
