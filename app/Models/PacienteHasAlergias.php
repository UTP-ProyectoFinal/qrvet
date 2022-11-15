<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PacienteHasAlergias extends Model
{
    use HasFactory;


    protected $table = 'qrv_paciente_has_alergias';
    public $timestamps = true;

    protected $fillable = [
        'n_alergia',
        'n_paciente',
    ];
    static $rules = [
        'n_alergia' => 'required',
        'n_paciente' => 'required',
    ];

    public function alergia()
    {
        return $this->hasOne(Alergias::class,'id','n_alergia');
    }
    public function paciente()
    {
        return $this->hasOne(Pacientes::class,'id','n_paciente');
    }
}
