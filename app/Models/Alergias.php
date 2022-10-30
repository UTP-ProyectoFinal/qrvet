<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alergias extends Model
{
    use HasFactory;

    protected $table = 'qrv_alergias';
    public $timestamps = true;
}
