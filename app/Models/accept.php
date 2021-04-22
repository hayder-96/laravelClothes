<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accept extends Model
{
    use HasFactory;


    protected $fillable = [
            'phone',
            'name',
            'clothes_id',
            'adress',
            'user_id',
            'enable',
            'noty'
    ];
}
