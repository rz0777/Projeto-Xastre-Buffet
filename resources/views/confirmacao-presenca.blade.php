@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('confirmacao-presenca.store') }}">
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="idade">Idade:</label>
            <input type="text" name="idade" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Confirmar Presença</button>
    </form>
</div>
@endsection
