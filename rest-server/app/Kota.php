<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model 
{
    protected $table = 'kt_kb';
    protected $fillable = [
        'nama_kt_kb','kode_pos'
    ];
    
}