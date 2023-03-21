@extends('blog.layouts._layout')

@section('content')
    <!-- ======= Sobre Nós Section ======= -->
    @include('blog.sobre')

    <!-- ======= Observatório Section ======= -->
    @include('blog.observatorio')

    <!-- ======= Biblioteca Section ======= -->
    @include('blog.biblioteca')

    <!-- ======= Contato Section ======= -->
    @include('blog.contato')

@endsection
