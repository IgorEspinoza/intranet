@extends('layouts.form')

@section('title','Registro')

@section('content')

<div class="container-scroller">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">

            </div>
            <div class="col text-right">
                <a href="{{ url('/home') }}" class="btn btn-sm btn-success">
                    <i class="fas fa-chevron-left"></i>
                    Regresar</a>
            </div>
        </div>
    </div>
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row flex-grow">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left p-5">
                        <div class="brand-logo">
                            <h3 class="text-center mb-3"> Nuevo Usuario</h3>
                        </div>

                        @if($errors->any())
                        <div class="text-center text-muted mb-4">
                            <h4>Se econtro el siguiente error</h4>
                        </div>
                        <div class="alert alert-danger" role="alert">
                            {{ $errors->first() }}
                        </div>
                        @else
                        <div class="text-center text-muted mb-2">
                            <small>Ingresa los Datos</small>
                        </div>
                        @endif

                        <form role="form" method="POST" action="{{ route('register') }}" class="pt-3">

                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Nombre" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Rut" name="rut" value="{{ old('rut') }}" required autocomplete="rut" autofocus>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Rol" name="rol" value="{{ old('rol') }}" required autocomplete="rol" autofocus>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Correo" name="email" value="{{ old('email') }}" required autocomplete="email">
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Contraseña" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Confimar Contraseña" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="mt-3">
                                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">REGISTRAR</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection