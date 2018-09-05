<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seguro extends Model
{
    //FECHAS EN ESPAÑOL
    use \Seiler\EloquentDate\EloquentDate;
    protected $dates = [
        'created_at',
        'updated_at',
        'published_at',
    ];

    protected $fillable = ['cilindraje','precio','updated_at'];
    public function tipoTramite(){

        return $this->belongsTo(Tramite::class,'idTipoTramite');
    }
    public function tipoVehiculo(){

        return $this->belongsTo(TipoVehiculo::class,'idTipoVehiculo');
    }

    public function tramites(){

        return $this->hasMany(ResumenTramite::class);
    }


}
