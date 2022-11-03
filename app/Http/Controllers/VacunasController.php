<?php

namespace App\Http\Controllers;

use App\Models\Alergias;
use App\Models\Medicamentos;
use App\Models\User;
use App\Models\Vacunas;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VacunasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacunas = Vacunas::paginate();

        return view('Vacunas.index', compact('vacunas'))
            ->with('i', (request()->input('page', 1) - 1) * $vacunas->perPage());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vacuna=new Vacunas();
        $medico=User::pluck('name','id');
        return view('Vacunas.create',compact('vacuna','medico'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Vacunas::$rules);
        $id = Auth::id();
        $vacunas['v_nombre'] = $request['v_nombre'];
        $vacunas['v_apuntes'] = $request['v_apuntes'];
        $vacunas['n_expira'] = $request['n_expira'];
        $vacunas['a_n_iduser'] =$id; /*** Este valor hay que cambiarlo por el usuario autenticado**/
        $vacunas['n_estado'] = 1;
        Vacunas::create($vacunas);

        return redirect()->route('Vacunas')
            ->with('success', 'Vacuna creada satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vacunas  $vacunas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vacuna = Vacunas::find($id);

        return view('Vacunas.show', compact('vacuna'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vacunas  $vacunas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vacuna = Vacunas::find($id);

        $medico = User::pluck('name','id');
        return view('vacunas.edit', compact('vacuna','medico'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vacunas  $vacunas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ido = Auth::id();
        request()->validate(Vacunas::$rules);
        $vacuna = Vacunas::find($id);
        $vacuna['v_nombre'] = $request['v_nombre'];
        $vacuna['v_apuntes'] = $request['v_apuntes'];
        $vacunas['n_expira'] = $request['n_expira'];
        $vacuna['a_n_iduser'] = $ido; /*** Este valor hay que cambiarlo por el usuario autenticado**/
        $vacuna['n_estado'] = 1;
        $vacuna->update($request->all());
        return redirect()->route('Vacunas')
            ->with('success', 'Vacuna actualizada satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vacunas  $vacunas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacunas $vacunas)
    {
        //
    }
}
