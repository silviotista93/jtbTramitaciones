<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    public function usuarios(){

       return $this->hasMany(User::class);
    }
}
