<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model 
{
    protected $table = 'karyawan';
    protected $guarded = [
        'id','created_at','deleted_at','updated_at'
    ];
}