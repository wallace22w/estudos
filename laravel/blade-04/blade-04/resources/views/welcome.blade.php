@extends('layouts.principal')

@section('title', 'HDC Events')

@section('content')

<h1>Algun título</h1>
<img src="/img/paisage.jpeg" alt="paisagem">
@if(10 > 15)
    <p>A condição é true</p>
@endif 

<p>{{ $nome }}</p>

@if($nome == "Pedro")
    <p>O nome é Pedro</p>
@elseif($nome == "Wallace")
    <p>O nome é {{$nome}} e tem {{$idade}} anos. Trabalha como {{ $profissao }}.</p>
@else
    <p>O nome não é pedro</p>
@endif

@for($i =0; $i < count($arr); $i++)
    <p>{{$arr [$i] }} - {{$i}}</p>
    @if($i == 2)
    <p>O i é 2</p>
    @endif
@endfor


@foreach($nomes as $nome)
    <p>{{$loop->index}}</p>
    <p>{{$nome}}</p>
@endforeach

@php
    $name = "João";
    echo "$name";

@endphp

@endsection

 
