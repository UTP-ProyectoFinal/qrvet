<?php

namespace App\Http\Controllers;

use App\Models\Procedimientos;
use Illuminate\Http\Request;

class ProcedimientosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $procedimientos = Procedimientos::all();
        return view('procedimientos.index') ->with('procedimientos',$procedimientos);
      //  return view('procedimientos.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('procedimientos.create');

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
     * @param  \App\Models\Procedimientos  $procedimientos
     * @return \Illuminate\Http\Response
     */
    public function show(Procedimientos $procedimientos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Procedimientos  $procedimientos
     * @return \Illuminate\Http\Response
     */
    public function edit(Procedimientos $procedimientos)
    {
        return view('procedimientos.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Procedimientos  $procedimientos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Procedimientos $procedimientos)
    {
        //
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
