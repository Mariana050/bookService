<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class libros extends Model
{
    protected $fillable = array("nombre", "descripcion", "valor", "foto");
}
