@extends('adminlte::page')

@section('title', 'Alterar usuário')

@section('content_header')
    <h1>Alteração usuário</h1>
@stop

@section('content')
    @include('_mensagens')

    <form action="{{ route('usuarios.update', $usuario) }}" method="post">
        @method('PUT')

        @include('usuarios._form')
    </form>
@stop
