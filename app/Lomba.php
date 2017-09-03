<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lomba extends Model
{
    
    protected $table = 'jenis_lomba';

    public $timestamps = false;

    protected $fillable = [
        'kode', 'nama'
    ];

}
