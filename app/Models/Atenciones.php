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
        'v_motivo',
        'n_peso',
        'n_temp',
        'n_frecresp',
        'v_detproced',
        'n_historia',
        'n_diagnos',
        'n_procedimiento',
    ];
    static $rules = [
        'v_motivo' => 'required',
        'n_peso' => 'required',
        'n_temp' => 'required',
        'n_frecresp' => 'required',
        'v_detproced' => 'required',
        'n_historia' => 'required',
        'n_diagnos' => 'required',
        'n_procedimiento' => 'required',
    ];
    public function historia()
    {
        return $this->hasOne(Historias::class,'id','n_historia');
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
