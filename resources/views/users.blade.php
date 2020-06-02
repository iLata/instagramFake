@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de usuarios</div>

                <div class="card-body">
                    <table class="table table-white mt-4">
                        <thead>
                            <tr>
                                <th scope="col">ID:</th>
                                <th scope="col">NOMBRE:</th>
                                <th scope="col">EMAIL:</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($consultaUsuarios as $usuario)
                                <tr>
                                    <td>{{ $usuario->id }}</td>
                                    <td>{{ $usuario->name }}</td>
                                    <td>{{ $usuario->email }}</td>
                                    <td><a class="btn btn-danger btn-sm btn-block" href="{{route('users.destroy', $usuario->id)}}" role="button">Eliminar</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
