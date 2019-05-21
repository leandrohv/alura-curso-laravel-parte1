@extends('layout')

@section('cabecalho')
Adicionar Série
@endsection
@section('conteudo')
<form method="post">
{{-- cross-site request forgery --}}
    @csrf
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" autofocus>
    </div>
    <button class="btn btn-primary mt-2">Adicionar</button>
    <a href="/series" class="btn btn-warning mt-2" >Voltar</a>
</form>
@endsection
