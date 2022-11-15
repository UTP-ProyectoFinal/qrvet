<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historias extends Model
{
    use HasFactory;

    protected $table = 'qrv_historias';
    public $timestamps = true;

    protected $fillable = [
        'v_motivo',
        'n_peso',
        'n_temp',
        'n_frecresp',
        'n_freccard',
        'v_detproced',
        'v_detdiagnos',
        'n_atencion',
        'n_diagnos',
        'n_procedimiento',
    ];
    static $rules = [
        'v_motivo' => 'required',
        'n_peso' => 'required',
        'n_temp' => 'required',
        'n_frecresp' => 'required',
        'n_freccard' => 'required',
        'v_detproced' => 'required',
        'n_atencion' => 'required',
        'n_diagnos' => 'required',
        'v_detdiagnos' => 'required',
        'n_procedimiento' => 'required',
    ];
    public function atencion()
    {
        return $this->hasOne(Atenciones::class,'id','n_atencion');
    }
    public function diagnostico()
    {
        return $this->hasOne(Diagnosticos::class,'id','n_diagnos');
    }
    public function procedimiento()
    {
        return $this->hasOne(Procedimientos::class,'id','n_procedimiento');
    }
}
