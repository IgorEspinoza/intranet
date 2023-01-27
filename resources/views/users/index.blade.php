@extends('layouts.panel')

@section()

<div class="card shadow">
    <div class="card-header boder-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Resgistrar</h3>
            </div>
            <div class="col text-right">
                <a href="{{ url(auth.register) }}"></a>
            </div>             
        </div>
    </div>
    <div class="card-body">
        @if (session('notification'))
            <div class="alert alert-success" role="alert">
                {{ session('notification') }}
            </div>            
        @endif
    </div>
    <div class="table-responsive">
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Rut</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Cargo</th>  
                    <th scope="col">Opciones</th>  

                </tr>

            </thead>
            <tbody>
                @foreach ($users as $user )
                    <tr>
                        <th scope="row">
                            {{$user->rut}}
                        </th>
                        <th scope="row">
                            {{$user->name}}
                        </th>
                        <th scope="row">
                            {{$user->email}}
                        </th>
                    
                        <td>
                            <form action="{{ url('/user/'.$user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ url('user/'.$users->id.'/edit') }}" class="btn btn-sm btn-warning">Editar</a>
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
    
@endsection