<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model 
{
    protected $table = 'kecamatan';
    protected $fillable = [
        'nama_kecamatan'
    ];
    
}