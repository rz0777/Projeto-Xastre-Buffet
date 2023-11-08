<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Convidado; // Importe o modelo Convidado, se já existir

class ConfirmacaoPresencaController extends Controller
{
    public function index()
    {
        return view('confirmacao-presenca');
    }
    
    public function listaConvidados()
    {
        // Recupere os convidados confirmados do banco de dados (usando o modelo Convidado)
        $convidados = Convidado::all();
    
        return view('lista-convidados', ['convidados' => $convidados]);
    }
    
    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|max:11',
            'idade' => 'required|integer',
        ]);

        // Salvar o convidado no banco de dados (supondo que você tenha um modelo 'Convidado')
        $convidado = new Convidado;
        $convidado->nome = $request->nome;
        $convidado->cpf = $request->cpf;
        $convidado->idade = $request->idade;
        $convidado->save();

        // Redirecionar de volta para o formulário com uma mensagem de sucesso
        return redirect('/confirmacao-presenca')->with('success', 'Confirmação de presença registrada com sucesso!');
    }

    public function removerConvidado($id)
    {
    // Recupere o convidado a ser removido pelo ID
    $convidado = Convidado::find($id);

    if (!$convidado) {
        return redirect()->back()->with('error', 'Convidado não encontrado.');
    }

    // Adicione verificação de autorização aqui, por exemplo, para garantir que apenas administradores possam remover convidados.

    // Realize a remoção do convidado
    $convidado->delete();

    return redirect()->back()->with('success', 'Convidado removido com sucesso.');
    }



}



