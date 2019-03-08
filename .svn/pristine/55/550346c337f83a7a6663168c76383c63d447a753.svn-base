<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class Licencia extends Model
{
    //FECHAS EN ESPAÑOL
    use \Seiler\EloquentDate\EloquentDate;
    protected $dates = [
        'created_at',
        'updated_at',
        'published_at',
    ];

    protected $fillable = ['categoria','precio','descuento','updated_at','tipo_licencia'];

    public function tipoTramite(){

        return $this->belongsTo(Tramite::class,'idTipoTramite');
    }

    public function tramites(){

        return $this->hasMany(ResumenTramite::class);
    }



}
