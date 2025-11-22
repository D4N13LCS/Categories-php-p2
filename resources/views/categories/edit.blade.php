@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Categoria</h1>

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" value="{{ $category->nome }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Descrição (opcional)</label>
            <textarea name="descricao" class="form-control">{{ $category->descricao }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Voltar</a>
    </form>

</div>
@endsection
