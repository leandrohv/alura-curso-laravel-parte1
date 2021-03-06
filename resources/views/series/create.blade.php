@extends('layout')

@section('cabecalho')
Adicionar Série
@endsection
@section('conteudo')
@include('erros', ['errors' => $errors])

<form method="post">
    @csrf
    <div class="row">
        <div class="col col-8">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" autofocus>
        </div>

        <div class="col col-2">
            <label for="qtd_temporadas">N° Temporadas</label>
            <input type="number" class="form-control" name="qtd_temporadas" id="qtd_temporadas" autofocus>
        </div>

        <div class="col col-2">
            <label for="ep_por_temporada">N° Episódios</label>
            <input type="number" class="form-control" name="ep_por_temporada" id="ep_por_temporada" autofocus>
        </div>
    </div>
    <button class="btn btn-primary mt-2">Adicionar</button>
    <a href="/series" class="btn btn-secondary mt-2" >Voltar</a>
</form>
@endsection
