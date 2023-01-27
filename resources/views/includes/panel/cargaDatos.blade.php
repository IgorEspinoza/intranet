@extends('home')

@section('title','Carga Datos')

@section('content2')

<div class="main-panel">
    <div class="content-wrapper">

        <div class="d-xl-flex justify-content-between align-items-start">
            <h2 class="text-dark font-weight-bold mb-2">Carga de Datos </h2>
            <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">

                <div class="dropdown ml-0 ml-md-4 mt-2 mt-lg-0">
                    <button class="btn bg-white p-3 d-flex align-items-center" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-calendar-day mr-1"></i>{{ date('d/m/Y') }}</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border">
                    <ul class="nav nav-tabs tab-transparent" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#business-1" role="tab" aria-selected="true">Mantenimiento</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="/cdcajeras" role="tab" aria-selected="false">Cajeras</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="performance-tab" data-toggle="tab" href="#business-3" role="tab" aria-selected="false">Aseadores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="conversion-tab" data-toggle="tab" href="#business-4" role="tab" aria-selected="false">Gerencia y Jefaturas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="conversion-tab" data-toggle="tab" href="#business-5" role="tab" aria-selected="false">Contores y Auxiliares</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="conversion-tab" data-toggle="tab" href="#business-6" role="tab" aria-selected="false">Administrativos</a>
                        </li>
                    </ul>
                </div>

                <div class="tab-pane fade show active" id="business-1" aria-labelledby="business-tab">
                    <div class="row d-flex justify-content-center align-items-center">

                        <i href="cdpersonalmantenimiento">
                            @yield('contentForm')
                        </i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection