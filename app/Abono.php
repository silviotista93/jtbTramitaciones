<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Abono extends Model
{
    protected $fillable = [
        'valor_abono','saldo','estado','resumen_tramite_id','metodo_pago','nota'
    ];

    public function resumenTramite(){
        return $this->belongsTo(ResumenTramite::class,'resumen_tramite_id');
    }

    public function obtenerDatoTramite($id){
        return DB::table('resumen_tramites')
            ->select('*')
            ->where('id','=',$id)
            ->first();
    }


    public function obtenerDatosTramite($id){

        return DB::table('abonos')
            ->select('abonos.*','resumen_tramites.*','resumentramite_seguro.*','seguros.*')
            ->join('resumen_tramites', 'resumen_tramites.id', '=', 'abonos.resumen_tramite_id')
            ->join('resumentramite_seguro','resumentramite_seguro.id_resumen_tramite','=','resumen_tramites.id')
            ->join('seguros','seguros.id','=','resumentramite_seguro.id_seguro')
            ->join('tramites','tramites.id','=','seguros.idTipoTramite')
            ->where('abonos.resumen_tramite_id','=',$id)
            ->groupBy('seguros.id')
            ->get();
    }
    public function obtenerDatosTramiteLicencia($id){

        return DB::table('abonos')
            ->select('abonos.*','resumen_tramites.*','resumen_licencia.*','licencias.*')
            ->join('resumen_tramites', 'resumen_tramites.id', '=', 'abonos.resumen_tramite_id')
            ->join('resumen_licencia','resumen_licencia.id_resumen_tramite','=','resumen_tramites.id')
            ->join('licencias','licencias.id','=','resumen_licencia.id_licencia')
            ->join('tramites','tramites.id','=','licencias.id_tipo_tramite')
            ->where('abonos.resumen_tramite_id','=',$id)
            ->groupBy('licencias.id')
            ->get();
    }

      public function obtenerDatosTramiteTransito($id){

        return DB::table('abonos')
            ->select('abonos.*','resumen_tramites.*','resumen_transito.*','tipo_tram_transitos.*','tipotramitransi_tramite.*','tramite_transitos.*')
            ->join('resumen_tramites', 'resumen_tramites.id', '=', 'abonos.resumen_tramite_id')
            ->join('resumen_transito','resumen_transito.id_resumenTramite','=','resumen_tramites.id')
            ->join('tramite_transitos','tramite_transitos.id','=','resumen_transito.id_tramite')
            ->join('tipotramitransi_tramite','tipotramitransi_tramite.id_tramite','=','tramite_transitos.id')
            ->join('tipo_tram_transitos','tipotramitransi_tramite.id_tipoTramTrans','=','tipo_tram_transitos.id')
            ->where('abonos.resumen_tramite_id','=',$id)
            ->groupBy('tipo_tram_transitos.id')
            ->get();
    }
    public function idcliente($idUsuario){
        return DB::table('users')
            ->select('*')
            ->where('id','=',$idUsuario)
            ->first();

    }

    public function descripcionTramite($id){
        return DB::table('abonos')
            ->select('abonos.*','resumen_tramites.*','resumentramite_seguro.*','seguros.*')
            ->join('resumen_tramites', 'resumen_tramites.id', '=', 'abonos.id_resumen_tramite')
            ->join('resumentramite_seguro','resumentramite_seguro.id_resumen_tramite','=','resumen_tramites.id')
            ->join('seguros','seguros.id','=','resumentramite_seguro.id_seguro')
            ->join('tramites','tramites.id','=','seguros.idTipoTramte')
            ->where('abonos.id_resumen_tramite','=',$id)
            ->groupBy('seguros.id')
            ->get();
    }
    public function tipoVehiculo($id){
        return DB::table('tipo_vehiculos')
            ->select('*')
            ->where('id','=',$id)
            ->get();
    }

    public function transitos($id){
        return DB::table('transitos')
            ->select('*')
            ->where('id','=',$id)
            ->get();
    }

    public function servicios($id){
        return DB::table('servicio_vehiculars')
            ->select('*')
            ->where('id','=',$id)
            ->get();
    }



    public function tipoIdentificacion($id){
        return DB::table('tipo_documentos')
            ->select('*')
            ->where('id','=',$id)
            ->first();
    }
    public function tipoTramite($id){
        return DB::table('tramites')
            ->select('*')
            ->where('id','=',$id)
            ->first();
    }
}
