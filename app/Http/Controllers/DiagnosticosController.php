<?php

namespace App\Http\Controllers;

use App\Models\Diagnosticos;
use Illuminate\Http\Request;

class DiagnosticosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('diagnosticos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('diagnosticos.create');
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
     * @param  \App\Models\Diagnosticos  $diagnosticos
     * @return \Illuminate\Http\Response
     */
    public function show(Diagnosticos $diagnosticos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diagnosticos  $diagnosticos
     * @return \Illuminate\Http\Response
     */
    public function edit(Diagnosticos $diagnosticos)
    {
        return view('diagnosticos.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Diagnosticos  $diagnosticos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diagnosticos $diagnosticos)
    {
        //
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
