<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailsPiece extends Model
{
    use HasFactory;

    protected $fillable = [
               'name',
            'size',
            'color',
            'accept_id',
            'image'
    ];
}
