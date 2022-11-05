<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedimientos extends Model
{
    use HasFactory;

    protected $table = 'qrv_procedimientos';
    public $timestamps = true;

    protected $fillable = [
        'v_nombre',
        'v_apuntes',
        'a_n_iduser',
        'n_estado',
        'n_notifica',
    ];
    static $rules = [
        'v_nombre' => 'required',
        'v_apuntes' => 'required',
        'n_notifica' => 'required',
    ];
    public function medicos()
    {
        return $this->hasOne(User::class,'id','a_n_iduser');
    }
}
