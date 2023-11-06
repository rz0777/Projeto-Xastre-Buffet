@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Convidados Confirmados</h1>
    <ul>
        @foreach ($convidados as $convidado)
            <li>
                Nome: {{ $convidado->nome }}, CPF: {{ $convidado->cpf }}, Idade: {{ $convidado->idade }}
            </li>
        @endforeach
    </ul>
</div>
@endsection
