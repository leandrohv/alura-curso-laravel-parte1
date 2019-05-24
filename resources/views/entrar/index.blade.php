@extends('layout')

@section('cabecalho')
    Entrar
@endsection

@section('conteudo')
@include('erros', ['errors' => $errors])

    <form method="post">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required class="form-control "
        </div>

        <div class="form-group  mt-3">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" required min="1" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mt-2">
            Entrar
        </button>
        <a href="/registrar" class="btn btn-secondary mt-2">
            Registrar-se
        </a>
    </form>
@endsection