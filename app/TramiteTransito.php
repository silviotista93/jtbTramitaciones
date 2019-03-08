<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TramiteTransito extends Model
{
    protected $fillable = ['placa','id_transito','id_vehiculo','id_servicio'];

    public function tramiteTransito(){
        return $this->belongsToMany(TipoTramTransito::class,'tipoTramiTransi_tramite','id_tramite','id_tipoTramTrans');
    }

    public function resumenTramite(){

        return $this->hasMany(ResumenTramite::class);
    }
}
