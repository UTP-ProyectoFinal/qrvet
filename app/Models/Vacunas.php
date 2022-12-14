<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacunas extends Model
{
    use HasFactory;


    protected $table = 'qrv_vacunas';
    public $timestamps = true;
    static $rules = [
        'v_nombre' => 'required',
        'v_apuntes' => 'required',
        'n_expira' => 'required',
    ];
    protected $fillable = [
        'v_nombre',
        'v_apuntes',
        'a_n_iduser',
        'n_estado',
        'n_expira',
    ];
    public function medicos()
    {
        return $this->hasOne(User::class,'id','a_n_iduser');
    }
}
