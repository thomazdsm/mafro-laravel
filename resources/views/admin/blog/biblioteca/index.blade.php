@extends('adminlte::page')

@section('title', 'Blog | Obervatório')

@section('content_header')
    <h1>Obervatório | Lista de Livros</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div style="padding-bottom: 50px">
                <a class="btn btn-success" href="{{ route('biblioteca.create') }}" style="float: right"> Adicionar Livro</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Título</th>
            <th>Categoria</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($biblioteca as $livro)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $livro->title }}</td>
                <td>{{ $livro->filter_tag }}</td>
                <td>
                    <form action="{{ route('biblioteca.destroy',$livro->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('biblioteca.show',$livro->id) }}">Exibir</a>
                        <a class="btn btn-primary" href="{{ route('biblioteca.edit',$livro->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@stop
