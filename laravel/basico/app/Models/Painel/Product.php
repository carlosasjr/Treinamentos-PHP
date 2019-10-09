<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    //colunas que podem ser preenchidas
    protected $fillable = [
        'name', 'number', 'active', 'category', 'description'
    ];

    //protected $guarded = []; //colunas que não podem ser preenchidas
}
