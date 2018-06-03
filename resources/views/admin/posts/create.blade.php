@extends('admin.layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Nuevo post
            </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @include('partials.errors')
                @csrf
                <div class="form-group">
                    <label for="">Título</label>
                    <input type="text" value="{{ old('title') }}" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Extracto</label>
                    <input type="text" value="{{ old('excerpt') }}" name="excerpt" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Contenido</label>
                    <textarea name="body" rows="4" class="form-control" placeholder="Puedes usar etiquetas html">{{ old('body') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Imagen pequeña</label>
                    <input type="file" name="imagesmall" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Imagen grande</label>
                    <input type="file" name="imagelarge" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('posts.index') }}" class="btn btn-danger">Cancelar</a>
            </form>
        </div>
    </div>
@endsection