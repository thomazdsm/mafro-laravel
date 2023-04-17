@extends('adminlte::page')

@section('title', 'Blog | Obervatório')

@section('content_header')
    <h1>Obervatório | Lista de Livros</h1>
@stop

@section('content')
    @if(count($contatos) < 1)
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div style="padding-bottom: 50px">
                    <a class="btn btn-success" href="{{ route('contato.create') }}" style="float: right"> Adicionar</a>
                </div>
            </div>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Localização</th>
            <th>Email</th>
            <th>Telefone</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($contatos as $contato)
            <tr>
                <td>{{ $contato->localizacao }}</td>
                <td>{{ $contato->email }}</td>
                <td>{{ $contato->telefone }}</td>
                <td>
                    <form action="{{ route('contato.destroy',$contato->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('contato.show',$contato->id) }}">Exibir</a>
                        <a class="btn btn-primary" href="{{ route('contato.edit',$contato->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@stop
