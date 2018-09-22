<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/cilindrajes/{id}/todos','Admin\SeguroController@cilindrajes');
Route::get('/ultimoCliente',function (){

    return App\User::select('id')->orderby('created_at','DESC')->first();
});

//Buscar Seguro para venta
Route::get('/seguroBuscar/{id}',function ($id){

    return \App\Seguro::where('id' ,$id)->with('tipoVehiculo')->get();
});

//Buscar Licencia para Venta
Route::get('/licenciaBuscar/{id}',function ($id){

    return \App\Licencia::where('id','=', $id)->get();
});

Route::get('/encontrarCliente/{identificacion}',function ($identificacion){

    return \App\User::role(['Cliente'])->where('identificacion', '=', $identificacion)->with('tipoDocumento')->get();
});

Route::get('/resumenTramite/{id}',function ($id){

    return \App\ResumenTramite::where('id',$id)->get();
});
Route::get('/examen-medico/{id}',function ($id){

    return \App\Medico::where('id',$id)->first();
});

Route::get('/ultimoCedula/{identificacion}','Admin\SeguroController@existeCedula');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//BUSCAR CLIENTE
Route::get('/tramitadorBuscar/{id}',function ($id){

    return \App\User::where('id','=',$id)->first();
});
Route::get('/contactoBuscar/{id}',function ($id){

    return \App\Agenda::where('id','=',$id)->first();
});

//BUSCAR USUARIO POR EMAIL
Route::get('/usuarioEmailBuscar/{email}',function ($email){

    return \App\User::where('email','=',$email)->with('roles')->first();
});
