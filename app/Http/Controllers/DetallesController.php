<?php

namespace App\Http\Controllers;

use App\Models\detalles;
use App\Models\User;
use App\Models\Clinicas;
use App\Models\Perfiles;
use Illuminate\Http\Request;

class DetallesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalles = detalles::paginate();

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
        $detalle=new detalles();
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
        $detalle = detalles::create($request->all());

        return redirect()->route('Detalles')
            ->with('success', 'Detalles de Usuario creados satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\detalles  $detalles
     * @return \Illuminate\Http\Response
     */
    public function show(detalles $detalles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detalles  $detalles
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detalle = detalles::find($id);
       
        $medico = User::pluck('name','id');
        $clinica = Clinicas::pluck('v_nomclin','id');
        $perfil = Perfiles::pluck('v_apuntes','id');

        return view('detalles.edit', compact('alergia','medico','clinica','perfil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\detalles  $detalles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $detalle = detalles::find($id);
        $detalle->update($request->all());
        return redirect()->route('Detalles')
            ->with('success', 'Detalles actualizados satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detalles  $detalles
     * @return \Illuminate\Http\Response
     */
    public function destroy(detalles $detalles)
    {
        //
    }
}
