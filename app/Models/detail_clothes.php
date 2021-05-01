<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_clothes extends Model
{
    use HasFactory;

  

    protected $fillable = [
        'name',
        'price',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
        'color1',
        'color2',
        'color3',
        'color4',
        'color5',
        'number1',
        'number2',
        'number3',
        'number4',
        'number5',
        'number6',
        'detail_id',
        'type'
    ];
}
