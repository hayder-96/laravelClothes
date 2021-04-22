<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mainclothes extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'image',
        'admin_id',
    ];
}
