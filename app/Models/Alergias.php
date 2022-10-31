<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alergias extends Model
{
    use HasFactory;
    static $rules = [
        'v_nombre' => 'required',
        'v_apuntes' => 'required',
        'a_n_iduser' => 'required',
    ];

    protected $table = 'qrv_alergias';
    public $timestamps = true;
    protected $fillable = [
        'v_nombre',
        'v_apuntes',
        'a_n_iduser',
    ];
    public function medicos()
    {
        return $this->hasOne(User::class,'id','a_n_iduser');
    }
}
