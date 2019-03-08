<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    protected $fillable = ['detalle','valor','id_tipo_gasto'];

    public function tipo_gasto(){
        return $this->belongsTo(TipoGasto::class,'id_tipo_gasto');
    }
}
