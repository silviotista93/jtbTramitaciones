<?php

namespace App;

use App\Notifications\ResetPasswordNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Traits\HasRoles;
use Jenssegers\Date\Date;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, HasRoles;


    protected $fillable = [
        'name','apellidos','id_tipoIdentificacion','identificacion','email','telefono','telefono_2','foto' ,'password','estado','genero','fecha_nacimiento','id_vendedor'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    public function tramites(){

        return $this->belongsTo(ResumenTramite::class);
    }

    public function tipoDocumento(){

        return $this->belongsTo(TipoDocumento::class,'id_tipoIdentificacion');
    }

    public function idVendedor(){
        return $this->belongsTo(User::class,'id_vendedor');
    }

    //FUNCION QUE PERMITE PONER FECHAS CARBON EN ESPAÑOL
    public function getCreatedAtAttribute($date){
        return new Date($date);
    }

}
