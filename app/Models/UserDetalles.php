<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetalles extends Model
{
    use HasFactory;


    protected $table = 'qrv_userdetalles';
    public $timestamps = true;
}
