<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfiles extends Model
{
    use HasFactory;

    protected $table = 'qrv_perfiles';
    public $timestamps = true;

  /*  protected $fillable = [
        'v_apuntes',
    ];*/
}
