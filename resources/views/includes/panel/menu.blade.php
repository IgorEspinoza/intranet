<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{asset('pages/icons/mdi.html')}}">
                    <span class="icon-bg"><i class="mdi mdi-contacts menu-icon"></i></span>
                    <span class="menu-title">Lista</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                    <span class="menu-title">Formularios</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="cargadatos/cdpersonalmantenimiento">Personal de Mantenimiento</a></li>
                        <li class="nav-item"> <a class="nav-link" href="cargadatos/cdcajeras">Cajeras</a></li>
                        <li class="nav-item"> <a class="nav-link" href="cargadatos/cdaseadores">Aseadores</a></li>
                        <li class="nav-item"> <a class="nav-link" href="cargadatos/cdgerenciajefaturas">Gerencia y Jefaturas</a></li>
                        <li class="nav-item"> <a class="nav-link" href="cargadatos/cdconductoresauxiliares">Conductores y Auxiliares</a></li>
                        <li class="nav-item"> <a class="nav-link" href="cargadatos/cdadministrativos">Administrativos</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{asset('pages/ui-features/typography.html')}}">Igor Te mAmo</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{asset('pages/charts/chartjs.html')}}">
                    <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
                    <span class="menu-title">Carga de Datos</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{asset('pages/tables/basic-table.html')}}">
                    <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
                    <span class="menu-title">Registro Usuarios</span>
                </a>
            </li>
            
            
            <li class="nav-item sidebar-user-actions">
                <div class="user-details">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="d-flex align-items-center">
                                <div class="sidebar-profile-img">
                                    <img src="{{asset('images/faces/face28.png')}}" alt="image">
                                </div>
                                <div class="sidebar-profile-text">
                                    <p class="mb-1">Henry Klein</p>
                                </div>
                            </div>
                        </div>
                        <div class="badge badge-danger">3</div>
                    </div>
                </div>
            </li>
            <li class="nav-item sidebar-user-actions">
                <div class="sidebar-user-menu">
                    <a href="#" class="nav-link"><i class="mdi mdi-settings menu-icon"></i>
                        <span class="menu-title">Settings</span>
                    </a>
                </div>
            </li>
            <li class="nav-item sidebar-user-actions">
                <div class="sidebar-user-menu">
                    <a href="#" class="nav-link"><i class="mdi mdi-speedometer menu-icon"></i>
                        <span class="menu-title">Take Tour</span></a>
                </div>
            </li>
            <li class="nav-item sidebar-user-actions">
                <div class="sidebar-user-menu">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefaul(); document.getElementById('formLogout').submit();">

                        <i class="fas fa-sign-in-alt"></i> Cerrar Sesión
                    </a>
                    <form id="formLogout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </div>
            </li>
        </ul>
    </nav>