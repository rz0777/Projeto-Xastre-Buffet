<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aniversario;

class AniversarioController extends Controller
{
    public readonly Aniversario $aniversario;

    public function __construct(){
        $this->aniversario = New Aniversario;
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aniversarios = $this->aniversario->all();

        return view('aniversarios',['aniversarios' => $aniversarios]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('aniversarios_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->aniversario->create([
            'idade_aniversariante' => $request->input('idade_aniversariante'),
            'nome_aniversariante' => $request->input('nome_aniversariante'),
            'n_convidados' => $request->input('n_convidados'),
            'pedido' => $request->input('pedido'),
            'id_festa' => $request->input('id_festa'),
            'data' => $request->input('data'),

        ]);

        if($created){
            return redirect()->route('aniversarios.index');
        }
            return redirect()->back()->with('message','Error');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
