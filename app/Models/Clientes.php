<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    protected $table = 'qrv_clientes';
    public $timestamps = true;
    static $rules = [
        'n_documento' => 'required',
        'v_nombre' => 'required',
        'v_apellido' => 'required',
        'v_correo' => 'required',
        'v_telefono' => 'required',
        'v_telfijo' => 'required',
        'n_tipodoc' => 'required',
    ];
    protected $fillable = [
        'n_documento',
        'v_nombre',
        'v_apellido',
        'v_correo',
        'v_telefono',
        'v_telfijo',
        'n_tipodoc',
    ];
    public function tipo()
    {
        return $this->hasOne(TipoDoc::class,'id','n_tipodoc');
    }
}
