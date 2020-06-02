@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Feed</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (Auth::user()->email === 'lluvia@upq.mx')
                        ¡Hola administrador!
                        <div class="row">
                            <div class="col-md-6">
                                <a class="btn btn-info btn-sm btn-block mt-3" href="{{route('users.index')}}" role="button">Administrar usuarios</a>
                            </div>
                            <div class="col-md-6">
                                <a class="btn btn-info btn-sm btn-block mt-3" href="{{route('images.index')}}" role="button">Administrar fotografías</a>
                            </div>
                        </div>
                    @else
                        <div class="text-center">¡Tus fotografías más importantes!</div>
                        <div class="row">
                            <div class="col-md-6">
                                <a class="btn btn-success btn-sm btn-block mt-3" href="{{route('image.show', Auth::user()->email)}}" role="button">Mi galería</a>
                            </div>
                            <div class="col-md-6">
                                <a class="btn btn-success btn-sm btn-block mt-3" href="/upload" role="button">Nueva fotografía</a>
                            </div>
                        </div>
                    @endif
                    @foreach ($consultaImagenes as $imagen)
                    <div class="card mt-4">
                        <img src="{{Storage::url($imagen->url)}}" class="card-img-top" alt="image">
                        <div class="card-body">
                        <p class="card-text">Publicada por: {{$imagen->userid}} </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
