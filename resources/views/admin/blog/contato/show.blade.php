@extends('adminlte::page')

@section('title', 'Blog | Biblioteca')

@section('content_header')
    <h1>Biblioteca | Visualizar Item</h1>
@stop

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-body box-profile">
            <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" style="height:150px; width: 150px;"
                     src="{{ asset('uploads/biblioteca/imagem/'.$biblioteca->image) }}"
                     alt="{{ $biblioteca->title }}">
            </div>

            <h3 class="profile-username text-center">{{ $biblioteca->title }}</h3>

            <p class="text-muted text-center">{{ $biblioteca->filter_tag }}</p>

            <a href="{{ asset('uploads/biblioteca/anexo/'.$biblioteca->anexo) }}" class="btn btn-primary btn-block" target="_blank"><b>Visualizar Anexo</b></a>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection
