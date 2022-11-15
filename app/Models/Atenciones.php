<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atenciones extends Model
{
    use HasFactory;

    protected $table = 'qrv_atenciones';
    public $timestamps = true;

    protected $fillable = [
        'n_cliente',
        'n_paciente',
    /*    'n_vacuna', */
    ];
    static $rules = [
        'n_cliente' => 'required',
        'n_paciente' => 'required',
      /*  'n_vacuna' => 'required',*/
    ];
    public function cliente()
    {
        return $this->hasOne(Clientes::class,'id','n_cliente');
    }
    public function paciente()
    {
        return $this->hasOne(Pacientes::class,'id','n_paciente');
    }
  /*  public function vacuna()
    {
        return $this->hasOne(Vacunas::class,'id','n_vacuna');
    }*/
}
