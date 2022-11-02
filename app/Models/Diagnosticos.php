<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosticos extends Model
{
    use HasFactory;
    static $rules = [
        'v_nombre' => 'required',
        'v_apuntes' => 'required'
    ];
    protected $fillable = [
        'v_nombre',
        'v_apuntes',
        'a_n_iduser',
        'n_estado',
    ];

    protected $table = 'qrv_diagnosticos';
    public $timestamps = true;
    public function medicos()
    {
        return $this->hasOne(User::class,'id','a_n_iduser');
    }
}
