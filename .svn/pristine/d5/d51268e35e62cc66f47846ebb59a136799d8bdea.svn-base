<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane active" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Más Opciones</h3>
            <ul class="control-sidebar-menu">
                <li>
                    <a href="javascript:" data-toggle="modal" data-target="#modalAgregarCupon">
                        <i class="menu-icon fa  fa-ticket bg-red"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Cupón de Descuento!</h4>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- /.control-sidebar-menu -->

            {{--<h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
                <li>
                    <a href="javascript:;">
                        <h4 class="control-sidebar-subheading">
                            Custom Template Design
                            <span class="pull-right-container">
                  <span class="label label-danger pull-right">70%</span>
                </span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                        </div>
                    </a>
                </li>
            </ul>--}}
            <!-- /.control-sidebar-menu -->

        </div>
        <!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
                <h3 class="control-sidebar-heading">General Settings</h3>

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Report panel usage
                        <input type="checkbox" class="pull-right" checked>
                    </label>

                    <p>
                        Some information about this general settings option
                    </p>
                </div>
                <!-- /.form-group -->
            </form>
        </div>
        <!-- /.tab-pane -->
    </div>
</aside>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>



<!-- MODAL AGREGAR CUPON -->
<div class="modal fade" id="modalAgregarCupon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #056F00;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"
                            style="color: #FFFFFF;">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel" style="color: #FFFFFF">Cupón de Descuento <i
                            class="fa  fa-ticket"></i></h4>
            </div>
            <div class="modal-body">
                <div class="box-body">
                    <div class="form-group">
                        <label for="">Digite número de cédula</label>
                        <input type="number" class="form-control inputBuscarClienteCupon" value=""
                               placeholder="digite numero de cedula">
                    </div>
                    <div class="form-group">
                        <div class="box" id="tablaMostrarClienteCupon">
                            <div class="box-header">
                                <h3 class="box-title">Cliente</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body no-padding">
                                <table class="table table-striped">
                                    <tr>
                                        <th style="width: 50px">Nombre</th>
                                        <th style="width: 30px">Identificación</th>
                                        <th style="width: 50px">Cupón</th>
                                    </tr>


                                    <tr>
                                        <td>
                                            <input disabled id="nombreClienteCupon" class=""
                                                   style="width: 145px; border: 0; background: border-box;">
                                        </td>

                                        </td>
                                        <td>
                                            <input disabled id="identificacionClienteCupon" class=""
                                                   style="width: 125px; border: 0; background: border-box;">
                                        </td>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-block btn-danger btn-generar-cupon"><i class="fa fa-ticket"></i></button>
                                        </td>
                                    </tr>
                                    <input type="hidden" id="idClienteCupon" name="idCliente" value="">

                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                    <div class="form-group" id="mostrar-cupon" style="display: none">
                        <div class="input-group">
                            <i class="fa fa-ticket fa-3x"></i>&nbsp
                            <input disabled id="ramdon-cupon" class=""
                                   style="width: 125px; border: 0; background: border-box;color: #0c0c0c; font-size: 25px; font-weight: bold" value="">
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Asignar Cupón</button>
            </div>

        </div>
    </div>
</div>