<?php

namespace Loja;

use Illuminate\Database\Eloquent\Model;

class Livros extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'price',
    ];
}
