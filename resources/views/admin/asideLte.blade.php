<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
        <span class="brand-text font-weight-light">Admin <b>AsesorAutos</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/public/assets/lte3/dist/img/fabio.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/admin/autos" class="nav-link">
                        <i class="nav-icon fa fa-car"></i>
                        <p>
                            Autos
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/marcas" class="nav-link">
                        <i class="nav-icon fa fa-copyright"></i>
                        <p>
                            Marcas
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/modelos" class="nav-link">
                        <i class="nav-icon fa fa-car-side"></i>
                        <p>
                            Modelos
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/equipamientos" class="nav-link">
                        <i class="nav-icon fa fa-tachometer-alt"></i>
                        <p>
                            Equipamientos
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/segmentos" class="nav-link">
                        <i class="nav-icon fa fa-truck-monster"></i>
                        <p>
                            Segmentos
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/tipo_combustibles" class="nav-link">
                        <i class="nav-icon fa fa-gas-pump"></i>
                        <p>
                            Tipos de Combustible
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/tipo_vendedores" class="nav-link">
                        <i class="nav-icon fa fa-user-tie"></i>
                        <p>
                            Tipos de Vendedor
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/destacados" class="nav-link">
                        <i class="nav-icon fa fa-exclamation-circle"></i>
                        <p>
                            Destacados
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>