@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">¡Sube tus fotografías!</div>

                <div class="card-body">
                    <div>Completa los siguientes campos</div>
                    <form class="mt-3" method="POST" action="{{route('imagenes.store')}}" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <div class="form-group">
                          <label for="exampleInputEmail1">Selecciona tu imagen</label>
                          <input type="text" class="form-control" name="userid" value="{{Auth::user()->email}}">
                          <small class="form-text text-muted">Este será el autor de la imagen.</small>
                          <input class="mt-2" type="file" class="form-control" name="url">
                          <small class="form-text text-muted">No compartiremos tus fotografías fuera de la plataforma.</small>
                        </div>
                        <button type="submit" class="btn btn-success">Subir</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
