@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Categorias</h1>

    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Criar Categoria</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            @forelse($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->nome }}</td>
                    <td>{{ $category->descricao }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-warning">Editar</a>

                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-sm btn-danger" onclick="return confirm('Excluir?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4">Nenhuma categoria cadastrada.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
