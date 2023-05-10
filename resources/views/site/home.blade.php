@extends('site.master')

@section('content')
<h2>Produtos</h2>
<ul>
    @foreach ($produtos as $produto)
        <li>{{$produto->produto}} {{$produto->referencia}} - <small>{{$produto->descricao}} {{$produto->fabrica}}</small></li>
    @endforeach
</ul>
@stop