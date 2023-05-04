@extends('adminlte::page')

@section('title', 'Evento | Listar Tipos de Transmissão')

@section('content_header')
    <h1>Evento | Listar Tipos de Transmissão</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div style="padding-bottom: 50px">
                <a class="btn btn-success" href="{{ route('tipo_transmissao.create') }}" style="float: right"> Criar Novo Tipo de Transmissão</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Título</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($tipoTransmissao as $tipo)
            <tr>
                <td>{{ $tipo->id }}</td>
                <td>{{ $tipo->titulo }}</td>
                <td>
                    <form action="{{ route('tipo_transmissao.destroy',$tipo->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('tipo_transmissao.edit',$tipo->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
