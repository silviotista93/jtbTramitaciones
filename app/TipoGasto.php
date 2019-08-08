<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoGasto extends Model
{
    const ACTIVE = 1;
    const INACTIVE = 2;

    protected $fillable = ['tipo_gasto','state'];
    public function gastos(){
        return $this->hasMany(Gasto::class);
    }

    public function setTipoGastoAttribute($valor){
        $this->attributes['tipo_gasto'] = strtolower($valor);
    }

    public function getTipoGastoAttribute($valor){
        return ucwords($valor);
    }
}
