<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class library extends Model
{
    protected $table = 'library';
    protected $fillable = [
        'name',
        'author',
        'isbn',
        'publisher',
        'year',
        'pages',
        'language',
        'genre',
        'cover',
        'price',
        'stock',
    ];
   
}
