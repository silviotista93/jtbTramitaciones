<ul class="sidebar-menu">
    <li class="header">NAVEGACIÓN</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="{{request()->is('admin') ? 'active' : ''}}"><a href="{{route('lista-clientes')}}"><i class="fa fa-users"></i><span>Clientes</span></a></li>

    {{--<li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>--}}
    <li class="treeview {{request()->is('admin/tramite*') ? 'active' : ''}}">
        <a href="#"><i class="fa fa-link "></i> <span>Crear Tramite de</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li {{request()->is('admin/tramite/licencia') ? 'class=active' : '' }}><a href="{{route('tramitar-licencia')}}">Licencias</a></li>
            <li {{request()->is('admin/tramite/seguro') ? 'class=active' : '' }}><a href="{{route('tramitar-seguro')}}">Seguro Obligatorio</a></li>
            <li><a href="{{route('tramitar-matricula')}}">Matricula</a></li>
            <li><a href="#">Traspasos</a></li>
            <li><a href="#">Otros</a></li>
        </ul>
    </li>
    <li class="treeview ">
        <a href="#"><i class="fa fa-dollar"></i> <span>Ventas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{route('adminVentas')}}"><i class="fa fa-circle-o"></i>Administrar Ventas</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i>Reporte de Ventas</a></li>
        </ul>
    </li>

    <li class="treeview ">
        <a href="#"><i class="fa fa-list-ul"></i> <span>Administrar Tramites</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{route('administrarLicencia')}}"><i class="fa fa-circle-o"></i>Licencias</a></li>
            <li><a href="{{route('administrarSeguro')}}"><i class="fa fa-circle-o"></i>Seguro Obligatorio</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i>Matricula</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Traspasos</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Otros</a></li>
        </ul>
    </li>
    <li class="treeview ">
        <a href="#"><i class="fa fa-user"></i> <span>Usuarios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class=""><a href="{{route('usuarios')}}"><i class="fa fa-user"></i><span>Usuarios Sistema</span></a></li>
            <li class=""><a href="{{route('usuarios')}}"><i class="fa fa-user"></i><span>Clientes</span></a></li>
            <li class=""><a href="{{route('tramitadores')}}"><i class="fa fa-user"></i><span>Tramitadores</span></a></li>

        </ul>
    </li>

</ul>