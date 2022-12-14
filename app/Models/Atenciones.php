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
    ];
    static $rules = [
        'n_cliente' => 'required',
        'n_paciente' => 'required',
    ];
    public function cliente()
    {
        return $this->hasOne(Clientes::class,'id','n_cliente');
    }
    public function paciente()
    {
        return $this->hasOne(Pacientes::class,'id','n_paciente');
    }
    public function historia(){
        return $this->belongsTo(Historias::class, 'id', 'n_atencion');
    }
    public function recetas(){
        return $this->hasMany(Recetas::class,'n_atencion', 'id');
    }
}
