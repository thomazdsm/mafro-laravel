@extends('adminlte::page')

@section('title', 'Evento | Criar Certificado')

@section('content_header')
    <h1>Evento | Criar Certificado</h1>
@stop

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <!-- /.card-header -->
                <form  action="{{ route('certificado.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Título</label>
                                    <input type="text" class="form-control" name="titulo" id="titulo" required="required">
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Descrição</label>
                                    <input type="text" class="form-control" name="descricao" id="descricao" maxlength="250">
                                    <small class="small" id="count_descricao" style="float: right"></small>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Imagem de Fundo</label>
{{--                                    <div class="input-group">--}}
{{--                                        <div class="custom-file">--}}
{{--                                            <input type="file" name="background_img" id="background_img" class="custom-file-input" />--}}
{{--                                            <label class="custom-file-label" for="file">Selecione o Arquivo</label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <input type="file" class="form-control" name="background_img" id="background_img" required="required">
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" style="float: right;">Cadastrar</button>
                        <a class="btn btn-secondary" href="{{ route('certificado.index') }}"> Voltar</a>
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

            var text_max = 250;
            $('#count_descricao').html('0 / ' + text_max );

            $('#descricao').keyup(function() {
                var text_length = $('#descricao').val().length;
                $('#count_descricao').html(text_length + ' / ' + text_max);
            });
        });
    </script>
@endsection
