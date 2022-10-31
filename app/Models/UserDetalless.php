<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetalless extends Model
{
    use HasFactory;

    protected $fillable = [
        'v_nombres',
        'v_apellidos',
        'v_telefono',
        'v_codcolegio',
        'n_estatus',
        'n_perfil',
        'n_clinica',
        'n_user',
    ];
    public function medicos()
    {
        return $this->hasOne(User::class,'id','a_n_iduser');
    }
    public function clinicas()
    {
        return $this->hasOne(Clinicas::class,'id','n_clinica');
    }
    public function perfiles()
    {
        return $this->hasOne(Perfiles::class,'id','n_perfil');
    }
    
}
