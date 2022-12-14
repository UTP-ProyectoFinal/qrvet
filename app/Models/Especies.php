<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especies extends Model
{
    use HasFactory;

    protected $table = 'qrv_especies';
    public $timestamps = true;
    protected $fillable = [
        'v_decripc',
    ];
    static $rules = [
        'v_decripc' => 'required',
    ];
}
