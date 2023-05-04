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
                <form  action="{{ route('biblioteca.update',$biblioteca->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-6">
                                <div class="form-group">
                                    <label>Título da Livro</label>
                                    <input type="text" class="form-control" name="title" id="title" maxlength="100" value="{{ $biblioteca->title }}">
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
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Tipo Arquivo</th>
                                            <th>Título</th>
                                            <th>Tamanho</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($uploads as $upload)
                                            <tr>
                                                <td>{{ $upload->tipo }}</td>
                                                <td>{{ $upload->file_name }}</td>
                                                <td>{{ $upload->size }} bytes</td>
                                                <td class="text-right py-0 align-middle">
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="{{ asset('uploads/'. $upload->name .'/' . $upload->file_hash) }}" class="btn btn-info" target="_blank">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-danger"><i class="fas fa-upload"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <div class="form-upload">
                        <label class="input-personalizado">
                            <span class="botao-selecionar"><i class="fa fa-rotate"></i></span>
                            <img class="imagem" />
                            <input type="file" class="input-file" accept="image/*">
                        </label>
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
        const $ = document.querySelector.bind(document);

        const previewImg = $('.imagem');
        const fileChooser = $('.input-file');

        fileChooser.onchange = e => {
            const fileToUpload = e.target.files.item(0);
            const reader = new FileReader();
            reader.onload = e => previewImg.src = e.target.result;
            reader.readAsDataURL(fileToUpload);
        };
    </script>
@endsection

@section('css')
    <style>
        .form-upload{
            background:#333;
            display: block;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
            width: 350px;
        }

        .input-personalizado{
            cursor: pointer;
        }

        .imagem{
            max-width: 100%;
        }

        .input-file{
            display:none;
        }
    </style>
@endsection
