<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'icon',
        'sub_title',
        'big_image',
        'small_image',
        'description',
        'client',
        'category'
    ];
}
