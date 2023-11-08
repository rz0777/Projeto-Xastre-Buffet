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
@foreach ($convidados as $convidado)
    <li>
        Nome: {{ $convidado->nome }}, CPF: {{ $convidado->cpf }}, Idade: {{ $convidado->idade }}
        <form method="POST" action="{{ route('remover-convidado', $convidado->id) }}" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Remover</button>
        </form>
    </li>
@endforeach

@endsection

