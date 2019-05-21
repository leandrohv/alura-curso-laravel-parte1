@extends('layout')

@section('cabecalho')
Adicionar Série
@endsection
@section('conteudo')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post">
    @csrf
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" autofocus>
    </div>
    <button class="btn btn-primary mt-2">Adicionar</button>
    <a href="/series" class="btn btn-warning mt-2" >Voltar</a>
</form>
@endsection
