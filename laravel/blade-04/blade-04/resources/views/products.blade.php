@extends('layouts.principal')

@section('title', 'Produtos')

@section('content')
<h1>Tela de Produtos</h1>
    @if($busca != '')
    <p>O usuário está buscando por: {{ $busca }}</p>
    @endif
<a href="/">Voltar para nossa Página Home</a>
@endsection