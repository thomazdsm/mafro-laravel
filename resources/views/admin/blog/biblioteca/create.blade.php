@extends('adminlte::page')

@section('title', 'Blog | Obervatório')

@section('content_header')
    <h1>Obervatório | Criar Categoria</h1>
@stop

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <!-- /.card-header -->
                <form  action="{{ route('biblioteca.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-6">
                                <div class="form-group">
                                    <label>Título da Livro</label>
                                    <input type="text" class="form-control" name="title" id="title" maxlength="100">
                                    <small class="small" id="count_title" style="float: right"></small>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-12 col-sm-6">
                                <div class="form-group">
                                    <label>Categoria</label>
                                    <select class="form-control" name="filter_tag" id="filter_tag">
                                        <option></option>
                                        @foreach($categorias as $categoria)
                                            <option value="{{ $categoria->filter_tag }}">{{ $categoria->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-12 col-sm-6">
                                <div class="form-group">
                                    <label>Anexo</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="anexo" id="anexo" class="custom-file-input" />
                                            <label class="custom-file-label" for="anexo">Selecione o Arquivo</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-12 col-sm-6">
                                <div class="form-group">
                                    <label>Imagem</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="imagem" id="imagem" class="custom-file-input" />
                                            <label class="custom-file-label" for="imagem">Selecione o Arquivo</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" style="float: right;">Cadastrar</button>
                        <a class="btn btn-secondary" href="{{ route('categorias.index') }}"> Voltar</a>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </section>
@endsection

@section('js')
    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2();

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            });

            var text_max = 100;
            $('#count_title').html('0 / ' + text_max );

            $('#title').keyup(function() {
                var text_length = $('#title').val().length;
                $('#count_title').html(text_length + ' / ' + text_max);
            });
        });
    </script>
@endsection
