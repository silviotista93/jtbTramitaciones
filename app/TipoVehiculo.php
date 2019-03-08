<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoVehiculo extends Model
{
    public function vehiculos(){

        return $this->hasMany(Seguro::class);
    }
}
