<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manzanas extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipoManzana',
        'precioKilo',
    ];
    public $timestamps = false;

}
