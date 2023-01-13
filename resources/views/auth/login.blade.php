@extends('layouts.form')

@section('content')

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row flex-grow">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left p-5">
                        <div class="brand-logo">
                            <!--  <img src="{{asset('images/logo-dark.svg')}}">-->
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
                            <small>Ingresa tus credenciales para ingresar al sistema</small>
                        </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}" class="pt-3">

                            @csrf

                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Correo" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Contraseña" name="password" required autocomplete="current-password">
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">INICIAR SESION</button>
                            </div>
                            <div class="my-2 d-flex justify-content-between align-items-center">
                                <a href="{{ route('password.request') }}" class="auth-link text-black">Olvidaste tu contraseña?</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection