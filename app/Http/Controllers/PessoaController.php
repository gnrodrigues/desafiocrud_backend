<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function index()
    {
        $pessoas = Pessoa::all();
        return response()->json($pessoas);
    }

    public function show($id)
    {
        $pessoas = Pessoa::where('id',$id)->first();
        $perfil = $pessoas->perfil()->first();
        $aplicativo = $pessoas->aplicativo()->first();
        if($pessoas){
            echo "<p>Nome: {$pessoas->nome}</p>";
        }
        if($perfil){
            echo "<p>Aplicativo: {$aplicativo}</p>";
            echo "<p>Nome: {$perfil->perfil}</p>";
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            "nome" => "required",
            "dataNascimento" => "required",
            "cpf" => "required",
            "rg" => "required",
            "perfilId" => "required"
        ]);
        $pessoa = Pessoa::create([
            "nome" => $request -> nome,
            "dataNascimento" => $request -> dataNascimento,
            "cpf" => $request -> cpf,
            "rg" => $request -> rg,
            "perfilId" => $request -> perfilId,
        ]);

        return response()->json($pessoa);
    }
}
