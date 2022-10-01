<?php

namespace App\Http\Controllers;

use App\Models\Razas;
use Illuminate\Http\Request;

class RazasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('razas.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('razas.create');
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
