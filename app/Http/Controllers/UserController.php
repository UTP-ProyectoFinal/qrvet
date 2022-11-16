<?php

namespace App\Http\Controllers;

use App\Models\Clinicas;
use App\Models\Perfiles;
use App\Models\User;
use App\Models\UserDetalles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    /*    $users = User::paginate();

        return view('user.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * $users->perPage());*/

        $users = User::all();
        return view('user.index') ->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
        $userDetalle = new UserDetalles();
        $clinicas = Clinicas::pluck('v_nomclin','id');
        $perfiles = Perfiles::pluck('v_decripc','id');
        return view('user.create', compact('user','userDetalle','clinicas','perfiles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(User::$rules);

        $user = User::create($request->all());
        $userDetalle = new UserDetalles();
        if( is_null($request->n_estatus) )
        {
            $userDetalle->n_estatus = 0;
        } else{
            $userDetalle->n_estatus = $request->n_estatus;
        }
        $userDetalle->v_telefono = $request->v_telefono;
        $userDetalle->v_codcolegio = $request->v_codcolegio;
        $userDetalle->n_perfil = $request->n_perfil;
        $userDetalle->n_clinica = $request->n_clinica;
        $userDetalle->n_user = $user->id;
        $userDetalle->save();

        return redirect()->route('Medicos.index')
            ->with('success', 'Medico creado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $userDetalle = UserDetalles::where('n_user', $id)->first();
        if( is_null($userDetalle) )
        {
            $userDetalle = new UserDetalles();
        }
        $clinicas = Clinicas::pluck('v_nomclin','id');
        $perfiles = Perfiles::pluck('v_decripc','id');

        return view('user.edit', compact('user', 'clinicas', 'perfiles', 'userDetalle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate(User::$rulesEdit);

        $user = User::find($id);
        $userDetalle = UserDetalles::where('n_user', $id)->first();
        if( is_null($userDetalle) )
        {
            $userDetalle = new UserDetalles();
        }

        $user->name = $request->name;
        $user->email = $request->email;

        if( !is_null($request->password) && !empty($request->password) )
        {
            $user->password = Hash::make($request->password);
        }

        if( is_null($request->n_estatus) )
        {
            $userDetalle->n_estatus = 0;
        } else{
            $userDetalle->n_estatus = $request->n_estatus;
        }

        $userDetalle->v_telefono = $request->v_telefono;
        $userDetalle->v_codcolegio = $request->v_codcolegio;
        $userDetalle->n_perfil = $request->n_perfil;
        $userDetalle->n_clinica = $request->n_clinica;
        $userDetalle->n_user = $id;


        $user->save();
        $userDetalle->save();

        return redirect()->route('Medicos.index')
            ->with('success', 'Medico actualizado satisfactoriamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    /*public function destroy($id)
    {
        $user = User::find($id)->delete();

        return redirect()->route('users.index')
            ->with('success', 'Usuario eliminado satisfactoriamente');
    }
    */
}
