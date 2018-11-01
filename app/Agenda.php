<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable = ['nombre','telefono','telefono_2','email','descripcion','updated_at','direccion'];
}
