@extends('adminlte::page')

@section('title', 'Evento | Criar Tipo de Transmissão')

@section('content_header')
    <h1>Evento | Criar Tipo de Transmissão</h1>
@stop

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <!-- /.card-header -->
                <form  action="{{ route('tipo_transmissao.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Título do Tipo de Transmissão</label>
                                    <input type="text" class="form-control" name="titulo" id="titulo" maxlength="15">
                                    <small class="small" id="count_title" style="float: right"></small>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" style="float: right;">Cadastrar</button>
                        <a class="btn btn-secondary" href="{{ route('tipo_transmissao.index') }}"> Voltar</a>
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

            var text_max = 15;
            $('#count_title').html('0 / ' + text_max );

            $('#titulo').keyup(function() {
                var text_length = $('#titulo').val().length;
                $('#count_title').html(text_length + ' / ' + text_max);
            });
        });
    </script>
@endsection
