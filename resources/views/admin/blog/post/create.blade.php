@extends('adminlte::page')

@section('title', 'Blog | Obervatório')

@section('content_header')
    <h1>Obervatório | Criar Post</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Product</h2>
            </div>
        </div>
    </div>

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Título do Post:</strong>
                    <input type="text" name="title" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descrição do Post:</strong>
                    <input type="text" name="subtitle" id="subtitle" class="form-control" maxlength="165">
                    <small class="small" id="count_subtitle" style="float: right"></small>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detalhes:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder=""></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Icone da Página Inicial:</strong>
                    <input type="text" name="icon" class="form-control" placeholder="">
                    <small><a href="https://fontawesome.com/search" target="_blank" style="float: right">Lista de Ícones Disponíveis!</a></small>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Anexo:</strong>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="file" id="file" class="custom-file-input" />
                        <label class="custom-file-label" for="file">Selecione o Arquivo</label>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center" style="padding-top: 50px">
                <input type="hidden" name="fileDir" value="postUpload" />
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <a class="btn btn-secondary" href="{{ route('posts.index') }}"> Voltar</a>
            </div>
        </div>
    </form>
@stop

@section('js')
    <script>
        $(function () {
            bsCustomFileInput.init();

            var text_max = 165;
            $('#count_subtitle').html('0 / ' + text_max );

            $('#subtitle').keyup(function() {
                var text_length = $('#subtitle').val().length;
                var text_remaining = text_max - text_length;

                $('#count_subtitle').html(text_length + ' / ' + text_max);
            });
        });
    </script>
@endsection
