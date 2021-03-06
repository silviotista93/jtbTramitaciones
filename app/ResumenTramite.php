<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ResumenTramite extends Model
{
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    //FECHAS EN ESPAÑOL
    use \Seiler\EloquentDate\EloquentDate;
    protected $dates = [
        'created_at',
        'updated_at',
        'published_at',
    ];

    protected $guarded = [];

        public function idcliente(){

            return $this->belongsTo(User::class,'idUsuario');
        }

        public function tipoTramite(){
            return $this->belongsTo(Tramite::class,'id_tipoTramite');
        }

    public function segurosTramite(){

        return $this->belongsToMany(Seguro::class,'resumenTramite_seguro','id_resumen_tramite','id_seguro');
    }
    public function licenciaTramite(){

        return $this->belongsToMany(Licencia::class,'resumen_licencia','id_resumen_tramite','id_licencia');
    }

    public function tramiTransito(){

        return $this->belongsToMany(TramiteTransito::class,'resumen_transito','id_resumenTramite','id_tramite');
    }

    public function tramitesAbono(){

        return $this->hasMany(Abono::class);
    }

    public function idvendedor(){

            return $this->belongsTo(User::class,'idVendedor');
    }
    public function idTramitador(){
        return $this->belongsTo(User::class,'idTramitador');
    }


    public function cantidad($id){
        return DB::table('resumenTramite_seguro')
            ->select('*')
            ->where([['id_resumen_tramite','=',$this->id],['id_seguro','=',$id]])
            ->get();
        }
    public function cantidadLicencia($id){
        return DB::table('resumen_licencia')
            ->select('*')
            ->where([['id_resumen_tramite','=',$this->id],['id_licencia','=',$id]])
            ->get();
    }

    public function sinEscuela($id){
            return DB::table('resumen_licencia')
                ->select('*')
                ->where('id_resumen_tramite',$id)
                ->get();
    }

    public function sinEscuelaResumen($id){
        return DB::table('resumen_licencia')
            ->select('*')
            ->where([['id_resumen_tramite','=',$this->id],['id_licencia','=',$id]])
            ->get();
    }

        public function tipoIdentificacion($id){
            return DB::table('tipo_documentos')
                ->select('*')
                ->where('id','=',$id)->first();
        }

        public function tipoVehiculoSeguro($id){
            return DB::table('tipo_vehiculos')
                ->select('*')
                ->where('id','=',$id)
                ->first();
        }

        public function ciudadTransito($id){
            return DB::table('transitos')
                ->select('ciudad')
                ->where('id',$id)
                ->first();
        }

        public function vehiculoTrans($id){
            return DB::table('tipo_vehiculos')
                ->select('*')
                ->where('id','=',$id)
                ->first();
        }
    public function servicioVehicuilar($id){
        return DB::table('servicio_vehiculars')
            ->select('*')
            ->where('id','=',$id)
            ->first();
    }
    public function tramites($id){
            return DB::table('tipoTramiTransi_tramite')
                ->select('*')
                ->where('id','=',$id)
                ->get();
    }
        /*public function obtenerAbonos($id){
            return DB::table('abonos')
                ->select('*')
                ->where('id_resumen_tramite','=',$id)->get();
        }

        public function tramitesDeben(){
            return DB::table('resumen_tramites')
                ->select('resumen_tramites.*','abonos.*','resumentramite_seguro.*','seguros.*')
                ->join('resumen_tramites', 'resumen_tramites.id', '=', 'abonos.id_resumen_tramite')
                ->join('resumentramite_seguro','resumentramite_seguro.id_resumen_tramite','=','resumen_tramites.id')
                ->join('seguros','seguros.id','=','resumentramite_seguro.id_seguro')
                ->join('tramites','tramites.id','=','seguros.idTipoTramte')
                ->get();

        }*/
}
