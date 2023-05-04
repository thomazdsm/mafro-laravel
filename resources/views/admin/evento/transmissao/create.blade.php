@extends('adminlte::page')

@section('title', 'Evento | Criar Transmissão de Evento')

@section('content_header')
    <h1>Evento | Criar Transmissão de Evento</h1>
@stop

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <!-- /.card-header -->
                <form  action="{{ route('transmissao.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tipo de Transmissão</label>
                                    <select class="form-control" name="tipo_transmissao_id" id="tipo_transmissao_id" required="required">
                                        <option></option>
                                        @foreach($tipoTransmissao as $tipo)
                                            <option value="{{ $tipo->id }}">{{ $tipo->titulo }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Título</label>
                                    <input type="text" class="form-control" name="titulo" id="titulo" required="required">
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Link da Transmissão (ou Endereço)</label>
                                    <input type="text" class="form-control" name="url_transmissao" id="url_transmissao" required="required">
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Detalhes</label>
                                    <textarea type="text" class="form-control" name="detalhes" id="detalhes" maxlength="500"></textarea>
                                    <small class="small" id="count_detalhes" style="float: right"></small>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" style="float: right;">Cadastrar</button>
                        <a class="btn btn-secondary" href="{{ route('transmissao.index') }}"> Voltar</a>
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

            var text_max = 500;
            $('#count_detalhes').html('0 / ' + text_max );

            $('#detalhes').keyup(function() {
                var text_length = $('#detalhes').val().length;
                $('#count_detalhes').html(text_length + ' / ' + text_max);
            });
        });
    </script>
@endsection
