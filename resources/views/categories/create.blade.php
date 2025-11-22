@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Criar Categoria</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Descrição (opcional)</label>
            <textarea name="descricao" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
@endsection
