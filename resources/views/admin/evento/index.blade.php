@extends('adminlte::page')

@section('title', 'Evento | Informações Básicas')

@section('content_header')
    <h1>Evento | Informações Básicas</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>

    <a href="{{route('evento.index')}}">Evento/Index</a>
    <br>
    <a href="{{route('evento.create')}}">Evento/Create</a>
    <br>
    <a href="{{route('evento.show',[1])}}">Evento/Show</a>
    <br>
    <a href="{{route('evento.edit',[1])}}">Evento/Edit</a>
    <br>



@stop
