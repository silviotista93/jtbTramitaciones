<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoTramTransito extends Model
{
    public function tramiteTransitoDatos(){
        return $this->belongsToMany(TramiteTransito::class);
    }
}
