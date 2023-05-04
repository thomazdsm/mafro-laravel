@extends('adminlte::page')

@section('title', 'Blog | Obervatório')

@section('content_header')
    <h1>Obervatório | Editar Categoria</h1>
@stop

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <!-- /.card-header -->
                <form action="{{ route('categorias.update',$categoria->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Título da Categoria</label>
                                    <input type="text" class="form-control" name="title" id="title" maxlength="15" value="{{ $categoria->title }}">
                                    <small class="small" id="count_title" style="float: right"></small>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" style="float: right;">Editar</button>
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

            var text_max = 15;
            $('#count_title').html('0 / ' + text_max );

            $('#title').keyup(function() {
                var text_length = $('#title').val().length;
                $('#count_title').html(text_length + ' / ' + text_max);
            });
        });
    </script>
@endsection
