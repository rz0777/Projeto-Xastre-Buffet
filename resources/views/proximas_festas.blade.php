@extends('layouts.app') {{-- Supondo que você tenha um layout base para a área operacional --}}

@section('content')
    @can('view-operational-section') {{-- Verifica a permissão usando Gate --}}
        <h1>Próximas Festas</h1>

        <table>
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>Aniversariante</th>
                    <th>Convidados Confirmados</th>
                    <th>Pacote de Comidas</th>
                </tr>
            </thead>
            <tbody>
                @foreach($proximasFestas as $festa)
                    <tr>
                        <td>{{ $festa->data }}</td>
                        <td>{{ $festa->hora }}</td>
                        <td>{{ $festa->aniversariante }}</td>
                        <td>{{ $festa->convidadosConfirmados()->count() }}</td>
                        <td>{{ $festa->pacote->nome }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Você não tem permissão para visualizar esta seção.</p>
    @endcan
@endsection
