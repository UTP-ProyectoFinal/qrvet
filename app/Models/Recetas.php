<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recetas extends Model
{
    use HasFactory;

    protected $table = 'qrv_recetas';
    public $timestamps = true;

    public function atencion()
    {
        return $this->hasOne(Atenciones::class,'id','n_atencion');
    }
}
