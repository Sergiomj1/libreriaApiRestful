<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libros extends Model
{
    use HasFactory;


    protected $fillable = [
        'titulo',
        'autor',
        'fecha',
        'num_paginas',
        'precio',
        'descripcion',

    ];




}


