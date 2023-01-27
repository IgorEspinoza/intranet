@extends('layouts.panel')

@section()
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0"> Nuevo Usuario</h3>
            </div>
            <div class="col text-right">
                <a href="{{ url('auth.register') }}" class="btn btn-sm btn-success">
                    <i class="fas fa-chevron-left"></i>
                    Regresar</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if ($errors->any())
        @foreach ( $errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            <i class="fas fa-exclamation-triangle"></i>
            <strong>Por favor!!</strong>{{ $error }}
        </div>

        @endforeach
        @endif

        <form action="{{ url('/') }}" method="POST">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="rut"></label>
                <input type="text" name="rut" class="form-control" value="{{ old('rut') }}">
            </div>
            <div class="form-group">
                <label for="email"></label>
                <input type="text" name="email" class="form-control" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label for="rol"></label>
                <input type="text" name="rol" class="form-control" value="{{ old('rol') }}">
            </div>
        </form>

    </div>
</div>

@endsection