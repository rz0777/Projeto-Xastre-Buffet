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

@section('content')
<!-- Conteúdo do formulário aqui -->

<script>
    $(document).ready(function() {
        // Captura o elemento do botão "Adicionar Convidado"
        var addButton = $(".add-convidado");
        var convidadosDiv = $("#convidados");

        // Define um contador para rastrear o número de campos de convidados adicionados
        var convidadoCount = 1;

        // Quando o botão "Adicionar Convidado" é clicado
        $(addButton).click(function() {
            convidadoCount++;

            // Cria um novo conjunto de campos para o próximo convidado
            var newConvidado = $('<div class="convidado"><input type="text" name="nome[]" placeholder="Nome" required><input type="text" name="cpf[]" placeholder="CPF" required><input type="text" name="idade[]" placeholder="Idade" required><button class="remove-convidado">Remover Convidado</button></div>');

            // Adiciona o novo conjunto de campos à seção de convidados
            $(convidadosDiv).append(newConvidado);

            // Atualiza os atributos "name" dos campos para garantir que os dados sejam enviados corretamente
            $(convidadosDiv).find('.convidado').each(function(index) {
                $(this).find('input').eq(0).attr("name", "nome[" + index + "]");
                $(this).find('input').eq(1).attr("name", "cpf[" + index + "]");
                $(this).find('input').eq(2).attr("name", "idade[" + index + "]");
            });

            // Adiciona um ouvinte de eventos para o botão "Remover Convidado"
            $(newConvidado).find('.remove-convidado').click(function() {
                convidadoCount--;
                $(newConvidado).remove();

                // Atualiza os atributos "name" dos campos restantes
                $(convidadosDiv).find('.convidado').each(function(index) {
                    $(this).find('input').eq(0).attr("name", "nome[" + index + "]");
                    $(this).find('input').eq(1).attr("name", "cpf[" + index + "]");
                    $(this).find('input').eq(2).attr("name", "idade[" + index + "]");
                });
            });
        });
    });
</script>
@endsection
