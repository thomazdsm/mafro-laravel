@extends('adminlte::page')

@section('title', 'Blog | Obervatório')

@section('content_header')
    <h1>Obervatório | Lista de Categorias</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div style="padding-bottom: 50px">
                <a class="btn btn-success" href="{{ route('categorias.create') }}" style="float: right"> Criar Nova Categoria</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Título</th>
            <th>Filtro</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($categorias as $categoria)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $categoria->title }}</td>
                <td>{{ $categoria->filter_tag }}</td>
                <td>
                    <form action="{{ route('categorias.destroy',$categoria->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('categorias.edit',$categoria->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@stop
