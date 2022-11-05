<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoriasHasAlergias extends Model
{
    use HasFactory;


    protected $table = 'qrv_historias_has_alergias';
    public $timestamps = true;

    protected $fillable = [
        'n_historia',
        'n_alergia',
    ];
    static $rules = [
        'n_historia' => 'required',
        'n_alergia' => 'required',
    ];
    public function historia()
    {
        return $this->hasOne(Historias::class,'id','n_historia');
    }
    public function alergia()
    {
        return $this->hasOne(Alergias::class,'id','n_alergia');
    }
}
