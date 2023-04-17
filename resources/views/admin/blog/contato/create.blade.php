@extends('adminlte::page')

@section('title', 'Contato | Criar Novo')

@section('content_header')
    <h1>Contato | Criar Novo</h1>
@stop

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <!-- /.card-header -->
                <form  action="{{ route('contato.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Título</label>
                                    <input type="text" class="form-control" name="title" id="title" value="Contato" required>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-12 col-sm-6">
                                <div class="form-group">
                                    <label>Subtítulo</label>
                                    <input type="text" class="form-control" name="subtitle" id="subtitle" maxlength="200" required>
                                    <small class="small" id="count_subtitle" style="float: right"></small>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-10 col-sm-6">
                                <div class="form-group">
                                    <label>Rua</label>
                                    <input type="text" class="form-control" name="rua" id="rua">
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-2 col-sm-6">
                                <div class="form-group">
                                    <label>Número</label>
                                    <input type="number" class="form-control" name="numero" id="numero">
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label>Bairro</label>
                                    <input type="text" class="form-control" name="bairro" id="bairro">
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label>Cidade</label>
                                    <input type="text" class="form-control" name="cidade" id="cidade">
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-2 col-sm-6">
                                <div class="form-group">
                                    <label>Estado</label>
                                    <input type="text" class="form-control" name="estado" id="estado">
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-2 col-sm-6">
                                <div class="form-group">
                                    <label>País</label>
                                    <select class="form-control select2bs4" name="pais" id="pais" style="width: 100%;">
                                        <option selected></option>
                                        @foreach($paises as $pais)
                                            <option value="{{ $pais->pais }}">{{ $pais->pais }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-2 col-sm-6">
                                <div class="form-group">
                                    <label>Telefone (DDI + DDD + Número)</label>
                                    <input type="text" class="form-control" name="telefone" id="telefone" data-inputmask='"mask": "+999 (99) 9 9999-9999"' data-mask required>
                                    <small>Exemplo: +055 (98) 9 91234-5678</small>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-12 col-sm-6">
                                <div class="form-group">
                                    <label>Google Maps Frame (html)</label>
                                    <input type="text" class="form-control" name="mapframe" id="mapframe" required>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" style="float: right;">Cadastrar</button>
                        <a class="btn btn-secondary" href="{{ route('contato.index') }}"> Voltar</a>
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

            var text_max = 200;
            $('#count_subtitle').html('0 / ' + text_max );

            $('#subtitle').keyup(function() {
                var text_length = $('#subtitle').val().length;
                $('#count_subtitle').html(text_length + ' / ' + text_max);
            });
        });
    </script>
@endsection
