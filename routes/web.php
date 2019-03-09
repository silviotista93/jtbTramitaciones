<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test', "Admin\ReportesController@datosGrafica");


Route::get('tramites', function (){
    return \App\ResumenTramite::with('segurosTramite','idcliente','tipoTramite','idVendedor','tramitesAbono')->orderby('created_at','DESC')->take(5)->get();
});
Route::get('/ventas/{id}',function ($id){
    return \App\ResumenTramite::where('idTramitador' ,$id)->with('segurosTramite','idcliente','tipoTramite')->get();
});

Route::get('/ruta-consultas/{id}',function ($id) {

    return \Illuminate\Support\Facades\DB::table('resumen_licencia')
        ->select('validar_curso')->where('id_resumen_tramite', $id)->get();
});
Route::get('/consulta-abonos/{id}',function ($id){
    return \App\Abono::where('id' ,$id)->with('resumenTramite')->first();
});

Route::get('/usuario', function (){
   return App\User::select('name','apellidos')->orderby('created_at','DESC')->take(1)->first();
});

Route::get('/tramitesTransi/{id}',function ($id){
   return \App\ResumenTramite::where('id' ,$id)->with('tramiTransito','idcliente','idVendedor','tipoTramite')->first();
});

Route::get('/', 'Admin\AdminController@dashboard')->name('dashboard')->middleware('loginVerifEstado');
Route::group(['prefix' => 'admin', 'namespace' =>'Admin','middleware' => 'loginVerifEstado'], function (){

    Route::get('/tramite/licencia','LicenciaController@index')->name('tramitar-licencia');
    Route::get('/tramite/seguro','SeguroController@index')->name('tramitar-seguro');
    Route::get('/tramite/trami-transito','TramiTransitoController@index')->name('tramitar-tramiTransito');


    //Usuarios...
    Route::get('/usuarios','UserController@index')->name('usuarios');
    Route::post('/usuario-creado', 'UserController@store')->name('usuarioCreado');
    Route::put('/update-estado/{usuario}/{estado}','UserController@actualizarEstado')->name('actualizarEstado');
    Route::delete('/usuario-eliminar/{usuario}','UserController@destroy')->name('usuarioEliminar');
    Route::get('/perfil','UserController@editarPerfil')->name('editarPerfil');
 
    Route::post('usuario-imagen','UserController@fotoPerfil')->name('admin.usuarioImagen');
    Route::put('imagen-actualizada/{user}','UserController@guardarFoto')->name('actualizarFotoPerfil');
    Route::put('password-actualizada/{user}','UserController@updatePassword')->name('actualizarContraseña');
    Route::put('/actualizar-usuario/{user}','UserController@actualizarUsuarios')->name('UsuarioActualizado');

    Route::get('/usuario-actualizar-perfil/{id}','UserController@indexUpdateUser')->name('userUpdatePerfil');
    Route::put('usuario-update-roles/{user}','UserController@updateRoles')->name('usuariosRoles');

    //Clientes
    Route::get('/clientes','ClienteController@indexClientes')->name('clientes');
    Route::get('/api/clientes',function (){
        //TABLA CLIENTES CON SUS FECHAS DE REGISTRO CON FORMATO
            $clientes = \App\User::with('idVendedor')->role(['Cliente'])->get();
        return \Yajra\DataTables\DataTables::of($clientes)
            ->editColumn('created_at', function ($user) {
                return $user->created_at ? with(new \Illuminate\Support\Carbon($user->created_at))->toFormattedDateString() : '';
            })
            ->make(true);
    });
    // ventas por cliente 
     Route::get('/api/admin-tramites-cliente/{idCliente}',function (Illuminate\Http\Request $request, $idUsuario){
        $tramiteCliente = \App\ResumenTramite::with('segurosTramite','idcliente','tipoTramite','idVendedor','tramitesAbono');
        if ($request->get('fechaInicio') && $request->get('fechaFin')) {
            $fi = \Carbon\Carbon::parse($request->get('fechaInicio'))->toDateString();
            $ff = \Carbon\Carbon::parse($request->get('fechaFin'))->toDateString();
            $tramiteCliente = $tramiteCliente->whereDate("created_at",">=",$fi." 00:00:00")->whereDate("created_at", "<=", $ff." 11:59:59");
        }
        $tramiteCliente = $tramiteCliente->where('idUsuario',$idUsuario)->get();
        return datatables()->of($tramiteCliente)->toJson();
    })->name('tablaTramitesCliente');  

    Route::get('/ventas_by_cliente/{idCliente}','AdministrarVentasController@tramitesCliente')->name('ventas_by_cliente');
    
    Route::post('/agregar-cliente','UserController@AgregarCliente')->name('clienteAgregado');
    Route::put('/actualizar-cliente/{user}','UserController@actualizarCliente')->name('clienteActualizado');
    Route::put('/update-roles/{user}','UserController@updateRolCliente')->name('clienteRoles');
    Route::put('/update-roles-nuevo-usuario/{user}','UserController@updateRolNuevoUsuario')->name('nuevoUsuarioRoles');

   

    //Tramitadores
    Route::get('/tramitadores','UserController@indexTramitadores')->name('tramitadores');
    Route::post('/tramitador-creado', 'UserController@agregarTramitador')->name('tramitadorCreado');
    Route::put('/actualizar-tramitador/{user}','UserController@editarTramitador')->name('tramitadorActualizado');
    Route::delete('/tramitador-eliminar/{id}','UserController@eliminarTramitador')->name('tramitadorEliminar');
    Route::get('/api/tramitadores',function (){
        return datatables()->of(\App\User::role(['Tramitador'])->get())->toJson();
    });

    //Crear tramite seguros
    Route::post('/tramite-seguro-creado','ResumenTramiteController@agregarSeguro')->name('ventaSeguro');
    Route::get('/api/seguros',function (){
        return datatables()->of(\App\Seguro::with('tipoVehiculo')->orderBy('idTipoVehiculo','ASC')->get())->toJson();
    });

    //Crear tramite de Licencias
    Route::post('/tramite-licencia-creado','ResumenTramiteController@agregarLicencia')->name('ventaLicencia');
    //Estado del tramite Licencia
    Route::put('/update-estado-licencia/{id}','ResumenTramiteController@actualizarEstadoLicencia')->name('actualizarEstadoLicencia');
    //Actualizar estado de los procesos
    Route::put('/update-estado-medico/{id}','ResumenTramiteController@actualizarEstadoMedico')->name('actualizarEstadoMedico');
    Route::put('/update-estado-conduccion/{id}','ResumenTramiteController@actualizarEstadoConduccion')->name('actualizarEstadoConduccion');
    Route::put('/update-estado-derechos/{id}','ResumenTramiteController@actualizarEstadoDerechos')->name('actualizarEstadoDerechos');

    //Crear tramite de tramites de transito
    Route::post('/tramite-transito-creado','ResumenTramiteController@agregarTramiteTransito')->name('ventaTramiTransito');


    Route::get('/api/licencias-publico',function (){
        return datatables()->of(\App\Licencia::where('tipo_precio','=','PUBLICO')->get())->toJson();
    });
    Route::get('/api/licencias-tramitador',function (){
        return datatables()->of(\App\Licencia::where('tipo_precio','=','TRAMITADOR')->get())->toJson();
    });

    //Ventas
    Route::get('/administrar-ventas','AdministrarVentasController@index')->name('adminVentas');
    Route::get('/info-venta/{id}','AdministrarVentasController@infoVenta')->name('infoVentas');
    Route::get('/info-venta-licencia/{id}','AdministrarVentasController@infoVentaLicencia')->name('infoVentasLicencia');
    Route::get('/info-venta-transito/{id}','AdministrarVentasController@infoVentaTramitesTransi')->name('infoVentasTransito');
    Route::get('/api/admin-ventas','AdministrarVentasController@reporteVentas');
    Route::get('/adminVentas/tramites-pendientes','AdministrarVentasController@indexTramitesPendientes')->name('tramitesPendientes');
    Route::get('/api/tramites-pendientes','AdministrarVentasController@tramitesPentientes');


    //Tramites de cada tramitador
    Route::get('/tramitador-ventas/{idTramitador}','AdministrarVentasController@tramitesTramitador')->name('tramitadorVentas');
    Route::get('/api/admin-tramites/{idTramitador}',function (Illuminate\Http\Request $request,$idTramitador){
        $tramiteTramitador = \App\ResumenTramite::with('segurosTramite','idcliente','tipoTramite','idVendedor','tramitesAbono');
        if ( $request->get('fechaInicio') && $request->get('fechaFin')) {
            $fi = \Carbon\Carbon::parse($request->get('fechaInicio'))->toDateString();
            $ff = \Carbon\Carbon::parse($request->get('fechaFin'))->toDateString();
            $tramiteTramitador = $tramiteTramitador->whereDate("created_at",">=",$fi." 00:00:00")->whereDate("created_at", "<=", $ff." 11:59:59");
        }
        $tramiteTramitador = $tramiteTramitador->where('idTramitador',$idTramitador)->get();
        return datatables()->of($tramiteTramitador)->toJson();
    })->name('tablaTramitesTramitadores');


    //Administrar Seguros
    Route::get('/administrar-seguros','SeguroController@administrarSeguro')->name('administrarSeguro');
    Route::put('/actualizar-seguro/{seguro}','SeguroController@actualizarPrecioSeguro')->name('actualizarSeguro');

    //Administrar Licencia
    Route::get('/administrar-licencias','LicenciaController@administrarLicencia')->name('administrarLicencia');
    Route::get('/ventas-descuento','LicenciaController@ventasDescuento')->name('ventasDescuento');
    Route::get('/api/ventas-descuento/',function (Illuminate\Http\Request $request){
        $info = \App\ResumenTramite::where('descuento',1);
        if ($request->get('fechaInicio') && $request->get('fechaFin')) {
            $fi = \Carbon\Carbon::parse($request->get('fechaInicio'))->toDateString();
            $ff = \Carbon\Carbon::parse($request->get('fechaFin'))->toDateString();
            if ($fi !== $ff){
                $info = $info->whereBetween("created_at",[$fi,$ff])->orWhereDate("created_at","=",$ff);
            } else {
                $info = $info->whereDate("created_at","=",$fi);
            }
        }
        return datatables()->of($info->with('segurosTramite','idcliente','tipoTramite','idVendedor','tramitesAbono')->get())->toJson();
    })->name('tablaTramitesDescuento');

    Route::put('/actualizar-licencia/{licencia}','LicenciaController@actaulizarPrecioLicencia')->name('actualizarLicencia');


    //ABONOS
    Route::post('/agregar-abono','ResumenTramiteController@agregarAbono')->name('agregarAbono');


    //FACTURA...
    Route::get('/factura/{id}','ResumenTramiteController@facturaPdf')->name('generar.factura');
    Route::get('/factura-abono/{id}','ResumenTramiteController@facturaAbonoPdf')->name('generar.factura-abono');
    Route::get('/recibo/{id}','ResumenTramiteController@reciboPdf')->name('generar.recibo');
    Route::get('/recibo-abono/{id}','ResumenTramiteController@reciboAbono')->name('generar.recibo-abono');

    //REPORTES
    Route::get('/reportes','ReportesController@index')->name('reportes');
    Route::get("/reportes/gastos", "ReportesController@reporteGastos")->name("reporteGastos");

    //Recibo Licencia
    Route::get('/recibo-licencia/{id}','ResumenTramiteController@reciboPdfLicencia')->name('generar.recibo-licencia');
    Route::get('/recibo-abono-licencia/{id}','ResumenTramiteController@reciboAbonoLicencia')->name('generar.recibo-abono-licencia');
    //recibo abono transito
    Route::get('/recibo-abono-transito/{id}','ResumenTramiteController@reciboAbonoTransito')->name('generar.recibo-abono-transito');
    
    Route::get('/factura-licencia/{id}','ResumenTramiteController@facturaPdfLicencia')->name('generar.factura-licencia');
    Route::get('/factura-abono-licencia/{id}','ResumenTramiteController@facturaAbonoLicenciaPdf')->name('generar.factura-abono-licencia');

    //Agenda
    Route::post('/contacto-agregado','AgendaController@agregarContacto')->name('agregarContacto');
    Route::get('/api/agenda',function (){
        return datatables()->of(\App\Agenda::all())->toJson();
    });

     //actualizar contacto de agenda
    Route::put('/actualizar-Agenda/{agenda}','AgendaController@actualizarAgenda')->name('contactoActualizado');

    //ADMINISTRAR PRECIOS
    //Otros
    Route::get('/admi-tramites/otros','OtrosController@index')->name('admin-otros');
    //Precio examen medico

    Route::put('precio-examen-medico-actualizado/{medico}','OtrosController@update')->name('examen-medico-actualizado');
    //Precio escuela de conduccion
    Route::put('precio-escuela-conduccion-actualizado/{escuela}','OtrosController@updateEscuela')->name('escuela-conduccion-actualizado');

    //precio derechos de transito 
    Route::put('precio-derechos-transito/{transito}','OtrosController@updateRecibo')->name('precio-derechos-transito');


    //GASTOS
    Route::get('/gastos','GastosController@index')->name('gastos');
    Route::post('/gasto-creado','GastosController@store')->name('gasto-creado');
    Route::get('/api/gastos-table',function (Illuminate\Http\Request $request){
        $gastos = \App\Gasto::with('tipo_gasto');
        if ($request->get('fechaInicio') && $request->get('fechaFin')) {
            $fi = \Carbon\Carbon::parse($request->get('fechaInicio'))->toDateString();
            $ff = \Carbon\Carbon::parse($request->get('fechaFin'))->toDateString();
            if ($fi !== $ff){
                $gastos = $gastos->whereBetween("created_at",[$fi,$ff])->orWhereDate("created_at","=",$ff);
            } else {
                $gastos = $gastos->whereDate("created_at","=",$fi);
            }
        }
        return datatables()->of($gastos->get())->toJson();
    })->name('tabla_gastos');
});

//RUTAS CON PERMISOS ESPECIFICOS
Route::group(['prefix' => 'admin', 'namespace' =>'Admin','middleware' => ['loginVerifEstado','permisos']], function (){
    //Administrar Seguros
    Route::get('/administrar-seguros','SeguroController@administrarSeguro')->name('administrarSeguro');
    Route::put('/actualizar-seguro/{seguro}','SeguroController@actualizarPrecioSeguro')->name('actualizarSeguro');
    //Administrar Licencia
    Route::get('/administrar-licencias','LicenciaController@administrarLicencia')->name('administrarLicencia');
    Route::put('/actualizar-licencia/{licencia}','LicenciaController@actaulizarPrecioLicencia')->name('actualizarLicencia');

    //Actualizar Usuarios
    Route::get('/usuario-actualizar-perfil/{id}','UserController@indexUpdateUser')->name('userUpdatePerfil');

    //Precio examen medico
    Route::get('/admi-tramites/otros','OtrosController@index')->name('admin-otros');
    Route::put('precio-examen-medico-actualizado/{medico}','OtrosController@update')->name('examen-medico-actualizado');


});

//RUTAS PARA LA DOCUMENACION
Route::group(['prefix' => 'documentacion', 'namespace' =>'Document','middleware' => ['loginVerifEstado']], function (){

    Route::get('/bienvenida','DocumentController@bienvenida')->name('bienvenida');
});








Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

//Registration Routes...
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset');


Route::get('/api/costos',function (){
    $data = new \stdClass();
    $data->recibo = DB::table('recibos')->get()[0];
    $data->medico = DB::table('medicos')->get()[0];
    $data->escuela = DB::table('escuelas')->get()[0];
    return json_encode($data);
});