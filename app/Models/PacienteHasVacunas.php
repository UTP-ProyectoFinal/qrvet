<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PacienteHasVacunas extends Model
{
    use HasFactory;

    protected $table = 'qrv_paciente_has_vacuna';
    public $timestamps = true;

    protected $fillable = [
        'n_vacuna',
        'n_paciente',
        'a_n_iduser',
    ];
    static $rules = [
        'n_vacuna' => 'required',
        'n_paciente' => 'required',
    ];

    public function vacuna()
    {
        return $this->hasOne(Vacunas::class,'id','n_vacuna');
    }
    public function paciente()
    {
        return $this->hasOne(Pacientes::class,'id','n_paciente');
    }
    public function medico()
    {
        return $this->hasOne(User::class,'id','a_n_iduser');
    }
}
