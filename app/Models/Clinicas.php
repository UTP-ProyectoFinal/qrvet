<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinicas extends Model
{
    
    use HasFactory;
    protected $fillable = [
        'v_nomclin',
        'v_pais',
        'v_ciuomun',
    ];
}
