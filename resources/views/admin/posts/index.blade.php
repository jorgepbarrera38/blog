@extends('admin.layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Posts
                <a href="{{ route('posts.create') }}" class="btn btn-primary pull-right" href="">Nuevo</a>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-md-12">
            @include('partials.messages')
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Listado de posts creados
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Título</th>
                                    <th>Slug</th>
                                    <!--<th>excerpt</th>-->
                                    <th>Publicado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->title }}</td>
                                <td><a href="{{ route('blog.show', $post->slug) }}" target="_blank">{{ $post->slug }}</a></td>
                                    <!--<td>{{ $post->excerpt }}</td>-->
                                    <td>
                                        <a onclick="getElementById('changestate-{{ $post->id }}').submit()" class="btn {{ $post->published ? 'btn-success':'btn-danger' }} btn-xs">{{ $post->published ? 'Publicado':'No publicado' }}</a>
                                        <form id="changestate-{{ $post->id }}" action="{{ route('posts.changestate', $post->slug) }}" method="POST">
                                            @csrf
                                            {{ method_field('PUT') }}
                                        </form>
                                    </td>
                                    <td nowrap>
                                        <a href="" class="btn btn-warning btn-sm">Editar</a>
                                        <a href="" class="btn btn-danger btn-sm">Eliminar</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $posts->render() }}
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
    </div>
@endsection