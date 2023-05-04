@extends('adminlte::page')

@section('title', 'Evento | Listar Transmissões de Evento')

@section('content_header')
    <h1>Evento | Listar Transmissões de Evento</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div style="padding-bottom: 50px">
                <a class="btn btn-success" href="{{ route('transmissao.create') }}" style="float: right"> Criar Nova Transmissão</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Tipo</th>
            <th>Título</th>
            <th>URL</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($transmissoes as $transmissao)
            <tr>
                <td>{{ $transmissao->id }}</td>
                <td>{{ $transmissao->tipo_transmissao->titulo }}</td>
                <td>{{ $transmissao->titulo }}</td>
                <td>{{ $transmissao->url_transmissao }}</td>
                <td>
                    <form action="{{ route('transmissao.destroy',$transmissao->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('transmissao.edit',$transmissao->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
