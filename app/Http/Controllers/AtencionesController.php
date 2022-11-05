<?php

namespace App\Http\Controllers;

use App\Models\Atenciones;
use App\Models\Historias;
use Illuminate\Http\Request;

class AtencionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atenciones = Historias::paginate();
        return view('Atenciones.index', compact('atenciones'))
            ->with('i', (request()->input('page', 1) - 1) * $atenciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Atenciones  $atenciones
     * @return \Illuminate\Http\Response
     */
    public function show(Atenciones $atenciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Atenciones  $atenciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Atenciones $atenciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Atenciones  $atenciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Atenciones $atenciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Atenciones  $atenciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atenciones $atenciones)
    {
        //
    }
}
