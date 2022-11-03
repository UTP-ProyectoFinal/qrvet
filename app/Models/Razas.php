<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Razas extends Model
{
    use HasFactory;

    protected $table = 'qrv_razas';
    public $timestamps = true;
    protected $fillable = [
        'v_nombre',
        'v_apuntes',
        'a_n_iduser',
        'n_estado',
        'n_especie',
    ];
    static $rules = [
        'v_nombre' => 'required',
        'v_apuntes' => 'required',
        'n_especie' => 'required',
    ];
    public function medicos()
    {
        return $this->hasOne(User::class,'id','a_n_iduser');
    }
    public function especies()
    {
        return $this->hasOne(Especies::class,'id','n_especie');
    }
}
