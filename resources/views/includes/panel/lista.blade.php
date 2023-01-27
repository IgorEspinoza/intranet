@extends('home')

@section('title','Lista')

@section('content2')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="d-xl-flex justify-content-between align-items-start">
            <h2 class="text-dark font-weight-bold mb-2"> Lista Trabajadores Andimar</h2>
            <form action="{{ url('lista/importar') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">

                    <div class="dropdown ml-0 ml-md-4 mt-2 mt-lg-0">
                        <input class="btn bg-white p-3 d-flex align-items-center" type="file" name="selArchivo" aria-haspopup="true" aria-expanded="false">
                        <i class="mr-1"></i></input>
                    </div>
                    <div class="dropdown ml-0 ml-md-4 mt-2 mt-lg-0">
                        <button class="btn bg-white p-3 d-flex align-items-center" type="submit" value="Importar" aria-haspopup="true" aria-expanded="false">
                            <i class="mr-1"></i>Cargar Archivo</button>
                    </div>
            </form>
            <div class="dropdown ml-0 ml-md-4 mt-2 mt-lg-0">
                <button class="btn bg-white p-3 d-flex align-items-center" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-calendar-day mr-1"></i>{{ date('d/m/Y') }}</button>
            </div>
        </div>
        </form>
    </div>
    <div class="row">
        <!-- <div class="main-panel"> -->
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <!-- <h4 class="card-title">Lista % Capacitaciones</h4>
                            <p class="card-description"> Add class <code>.table-striped</code>
                            </p> -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th> USUARIO </th>
                                <th> RUT </th>
                                <th> NOMBRE </th>
                                <th> CARGO </th>
                                <th> % CAPACITACIONES </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($people as $list )
                            <tr>
                                <td class="py-1">
                                    <img src="{{ asset('images/faces-clipart/pic-1.png') }} alt=" image" />
                                </td>
                                <td> {{ $list->rut }} </td>

                                <td> {{ $list->Nombre + $list->Apellido}} </td>
                                <td> {{ $list->rol }} </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection