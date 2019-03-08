<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoGasto extends Model
{
    protected $fillable = ['tipo_gasto'];
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
