@extends('layout')

@section('cabecalho')
    Episódios
@endsection

@section('conteudo')
@include('mensagem', ['mensagem' => $mensagem])
    <a href="/series" class="btn btn-secondary mb-2">Voltar</a>

    <form action="/temporadas/{{ $temporadaId }}/episodios/assistido" method="post">
        @csrf
        <ul class="list-group">
            @foreach ($episodios as $episodio)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Episódio {{ $episodio->numero }}
                @auth
                <input type="checkbox"
                       name="episodios[]"
                       value="{{ $episodio->id }}"
                       {{ $episodio->assistido ? 'checked' : '' }}>
                @endauth
            </li>
            @endforeach
        </ul>
        @auth
            <button class="btn btn-primary mt-2 mb-2">Salvar</button>
        @endauth
    </form>
@endsection
