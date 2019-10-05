<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todolist extends Model
{
    protected $table = 'todolist';
    protected $fillable = [
        'id', 'title', 'status', 'birth', 'urgency', 'kategori_id'
    ];

    
}
