@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de imágenes</div>

                <div class="card-body">
                    <table class="table table-white mt-4" style="max-width: 100%">
                        <thead>
                            <tr>
                                <th scope="col">ID:</th>
                                <th scope="col">NOMBRE:</th>
                                <th scope="col">IMAGEN:</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($consultaImagenes as $imagen)
                                <tr>
                                    <td>{{ $imagen->id }}</td>
                                    <td>{{ $imagen->userid }}</td>
                                    <td><img src="{{Storage::url($imagen->url)}}" class="card-img-top" alt="image" width="50%"></td>
                                    <td><a class="btn btn-danger btn-sm btn-block" href="{{route('images.destroy', $imagen->id)}}" role="button">Eliminar</a></td>
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
