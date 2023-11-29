@extends('master')

@section('content')

@if (session()->has('message'))
    <div class="alert">{{ session()->get('message') }}</div>
@endif

@if (auth()->check())
    <p>Olá, {{ auth()->user()->name }}!</p>
@endif

<form action="{{ route('aniversarios.store') }}" method='POST' class="create-party-form">
    @csrf
    <div class="form-group">
        <label for="nome_aniversariante">Nome do Aniversariante</label>
        <input type="text" name='nome_aniversariante' required>
    </div>
    <div class="form-group">
        <label for="idade_aniversariante">Idade do Aniversariante</label>
        <input type="number" name='idade_aniversariante' required>
    </div>
    <div class="form-group">
        <label for="n_convidados">Número de Convidados</label>
        <input type="number" name='n_convidados' required>
    </div>
    <div class="form-group">
        <label for="pedido">Pedido</label>
        <textarea name="editor" id="editor" required></textarea>
    </div>
    <input type="hidden" name="id_festa" value="{{ auth()->user()->id }}">
    <div class="form-group">
        <label for="data">Data</label>
        <input type="date" name='data' required>
    </div>

    <h2>Pacotes</h2>
    <!-- Adicione a imagem de comidas aqui -->
    <div class="form-group">
        <label for="comidas_img"></label>
        <img src="https://www.shutterstock.com/pt/image-photo/various-typical-brazilian-small-savory-snacks-796742380.jpg" alt="Pacote 1" style="max-width: 100%; height: auto;">
    </div>

    <!-- Adicione a imagem de bebidas aqui -->
    <div class="form-group">
        <label for="bebidas_img"></label>
        <img src="https://www.shutterstock.com/pt/image-photo/chicken-fillet-rice-beans-manioc-flour-2020215452.jpg" alt="Pacote 2" style="max-width: 100%; height: auto;">
    </div>

    <button type="submit" class="btn-create-party">Criar festa</button>
</form>

@endsection
