<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-category">Menu</li>
            <li class="nav-item">
                <a class="nav-link" href="/home/dashboard">
                    <span class="icon-bg"><i class="far fa-chart-bar menu-icon"></i></span>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/lista') }}">
                    <span class="icon-bg"><i class="far fa-list-alt menu-icon"></i></span>
                    <span class="menu-title">Lista</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <span class="icon-bg"><i class="far fa-file-alt menu-icon"></i></span>
                    <span class="menu-title">Formularios</span>
                    <!-- <i class="menu-arrow"></i> -->
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column ">
                        <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" >Personal de Mantenimiento</a></li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" >Cajeras</a></li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false">Aseadores</a></li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="false">Gerencia y Jefaturas</a></li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#ui-basic5" aria-expanded="false">Conductores y Auxiliares</a></li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#ui-basic6" aria-expanded="false">Administrativos</a></li>
                    </ul>
                </div><!-- 
                <div class="collapse" id="ui-basic1">
                    <ul class="nav flex-column ">
                        <li class="nav-item"> <a class="nav-link" href="#">Manejo Manual de Carga</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Trastornos M??sculos Esquel??ticos</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Manejo Sustancias Peligrosas</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Almacenamiento Sustancias Peligrosas</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Prevencion exposicion Radiaci??n UV</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Control Riesgos Altura</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Cuidado de las Manos</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Orientacion Prevenci??n de Riesgos</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">PREXOR</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Actitudes Preventivas</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Uso Herramientas El??ctricas y Motrices</a></li>
                    </ul>
                </div>
                <div class="collapse" id="ui-basic2">
                    <ul class="nav flex-column ">
                        <li class="nav-item"> <a class="nav-link" href="#">Atenci??n de P??blico</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">TMERT</a></li>                                                
                </div>
                <div class="collapse" id="ui-basic3">
                    <ul class="nav flex-column ">
                        <li class="nav-item"> <a class="nav-link" href="#">Limpieza y Desinfeccion Frente COVID</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Uso Sustancias Peligrosas</a></li>                                                               
                </div>
                <div class="collapse" id="ui-basic4">
                    <ul class="nav flex-column ">
                        <li class="nav-item"> <a class="nav-link" href="#">Responsabilidad Civil y Penal</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Investigaci??n Accidentes</a></li>                                                
                        <li class="nav-item"> <a class="nav-link" href="#">Liderasgo y Comunicacion en la Administraci??n de Riesgos</a></li>                                                
                        <li class="nav-item"> <a class="nav-link" href="#">Identificacion de Peligros y Evalucion de Riesgos</a></li>                                                
                        <li class="nav-item"> <a class="nav-link" href="#">Prevenci??n del Coronavirus</a></li>                                                                
                </div>
                <div class="collapse" id="ui-basic5">
                    <ul class="nav flex-column ">
                        <li class="nav-item"> <a class="nav-link" href="#">Manejo a la Defenciva</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Riesgos Cr??ticos en la Conduccion de Buses</a></li>                                                
                        <li class="nav-item"> <a class="nav-link" href="#">Reinducci??n por Exceso de Velocidad</a></li>                                                
                        <li class="nav-item"> <a class="nav-link" href="#">Campa??a de Exceso de Velocidad</a></li>                                                
                        <li class="nav-item"> <a class="nav-link" href="#">Conduccion Segura en alta Monta??a</a></li>                                                
                        <li class="nav-item"> <a class="nav-link" href="#">Control de Riesgos en la Conducci??n</a></li>                                                
                        <li class="nav-item"> <a class="nav-link" href="#">Manejo a la Defensiva en Autopistas y Carreteras</a></li>                                                
                        <li class="nav-item"> <a class="nav-link" href="#">Control de riesgos de Fatiga y Somnolencia en la Conducci??n</a></li>                                                
                        <li class="nav-item"> <a class="nav-link" href="#">Reinducci??n en Manejo a la Defensiva</a></li>                                                
                        <li class="nav-item"> <a class="nav-link" href="#">Curso Te??rico/Practico Conducci??n Preventiva de Veh??culos de Transporte de Pasajeros con Simulador </a></li>                                                
                </div>
                <div class="collapse" id="ui-basic6">
                    <ul class="nav flex-column ">
                        <li class="nav-item"> <a class="nav-link" href="#">Primeros auxilios</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">TMERT</a></li>                                                
                </div>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="/cdpersonalmantenimiento" aria-expanded="false" aria-controls="ui-basic">  <!-- data-toggle="collapse" -->
                    <span class="icon-bg"><i class="far fa-clipboard menu-icon"></i></span>
                    <span class="menu-title">Carga de Datos</span>
                    <!-- <i class="menu-arrow"></i> -->
                </a>
                <!-- <div class="collapse" id="ui-basic2">
                    <ul class="nav flex-column ">
                        <li class="nav-item"> <a class="nav-link" href="cdpersonalmantenimiento">Personal de Mantenimiento</a></li>
                        <li class="nav-item"> <a class="nav-link" href="cdcajeras">Cajeras</a></li>
                        <li class="nav-item"> <a class="nav-link" href="cdaseadores">Aseadores</a></li>
                        <li class="nav-item"> <a class="nav-link" href="cdgerenciajefaturas">Gerencia y Jefaturas</a></li>
                        <li class="nav-item"> <a class="nav-link" href="cdconductoresauxiliares">Conductores y Auxiliares</a></li>
                        <li class="nav-item"> <a class="nav-link" href="cdadministrativos">Administrativos</a></li>
                    </ul>
                </div> -->
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="/registro1">
                    <span class="icon-bg"><i class="far fa-id-badge menu-icon"></i></span>
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
                                    <p class="mb-1">{{auth()->user()->name}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="badge badge-danger">3</div>
                    </div>
                </div>
            </li>
            <!-- <li class="nav-item sidebar-user-actions">
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
            </li> -->
            @guest
            @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item sidebar-user-actions">
                <div class="sidebar-user-menu">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); 
                        document.getElementById('formLogout').submit();">

                        <i class="fas fa-sign-in-alt"></i> 
                        <span class="menu-title">Cerrar Sesi??n</span>
                    </a>
                    
                    <form id="formLogout" action="{{ route('logout') }}" method="POST" style="display: none" class="d-done">
                        @csrf
                    </form>

                </div>
            </li>
            @endguest
        </ul>
    </nav>
