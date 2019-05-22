@extends('layout')

@section('cabecalho')
    Temporadas de {{ $serie->nome }}
@endsection

@section('conteudo')
    <a href="/series" class="btn btn-warning mb-2">Voltar</a>
    <ul class="list-group">
        @foreach ($temporadas as $temporada)
            <li class="list-group-item">Temporada {{ $temporada->numero }}</li>
        @endforeach
    </ul>
@endsection
