<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = [
        'id', 'jenis',
    ];
    
    protected $table = 'kategori';
}
