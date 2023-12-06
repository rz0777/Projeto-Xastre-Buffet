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

    <!-- Adicione a imagem de comidas aqui -->
    <div class="form-group image-group">
        <label for="comidas_img">Imagens do Pacote 1</label>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQW6OvPmzzFsVGdFlZaGOIznTUgW0LVcrF_9Q&usqp=CAU" alt="Imagem de Comidas" class="package-image">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJak_2uxYNIC341iYKIuq0GxR6FtbFZKjz_Q&usqp=CAU" alt="Imagem de Comidas" class="package-image">
    </div>

    <!-- Adicione a imagem de bebidas aqui -->
    <div class="form-group image-group">
        <label for="bebidas_img">Imagens do Pacote 2</label>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6M_l3ETpH2vcUcrIFa-ENyHUs8280Xd2ydg&usqp=CAU" alt="Imagem de Bebidas" class="package-image bebidas_img">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-Qbs2yPdZCDVT364vR4gkBFD6C87i4jWBbaGf0jDuGG21kiLCkDGIwzgg8j3EnECM3wk&usqp=CAU" alt="Imagem de Bebidas" class="package-image bebidas_img">
    </div>

    <button type="submit" class="btn-create-party">Criar festa</button>
</form>

@endsection
