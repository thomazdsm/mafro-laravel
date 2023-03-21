@extends('adminlte::page')

@section('title', 'Blog | Obervatório')

@section('content_header')
    <h1>Obervatório | Lista de Posts</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div style="padding-bottom: 50px">
                <a class="btn btn-success" href="{{ route('posts.create') }}" style="float: right"> Criar Novo Post</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        @section('js')
            <script>
                window.onload = (event) => {
                    var toast = toastr.success('Item cadastrado com sucesso!')
                    toast.show()
                }
            </script>
        @endsection
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Título</th>
            <th>Detalhes</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->detail }}</td>
                <td>
                    <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}">Exibir</a>
                        <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $posts->links() !!}
@stop
