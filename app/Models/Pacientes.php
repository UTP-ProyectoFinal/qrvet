<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pacientes extends Model
{
    use HasFactory;

    protected $table = 'qrv_pacientes';
    public $timestamps = true;
    static $rules = [
        'v_identifica' => 'required',
        'v_nombre' => 'required',
        'v_apellido' => 'required',
        'd_fecnaci' => 'required',
        'n_sexo' => 'required',
        'n_raza' => 'required',
        'n_cliente' => 'required',
    ];

    protected $fillable = [
        'v_identifica',
        'v_nombre',
        'v_apellido',
        'd_fecnaci',
        'n_sexo',
        'n_raza',
        'n_cliente',
    ];

    public function sexo()
    {
        return $this->hasOne(Sexo::class,'id','n_sexo');
    }
    public function raza()
    {
        return $this->hasOne(Razas::class,'id','n_raza');
    }
    public function cliente()
    {
        return $this->hasOne(Clientes::class,'id','n_cliente');
    }
}
