<?php

namespace App\Http\Controllers;

use App\Models\PessoaAplicativo;
use Illuminate\Http\Request;

class PessoaAplicativoController extends Controller
{


    public function index()
    {
        $pessoas = PessoaAplicativo::all();
        return response()->json($pessoas);
    }


    public function store(Request $request)
    {
        $request->validate([
            "pessoaId" => "required",
            "aplicativoId" => "required",
        ]);
        $pessoaAplicativo = PessoaAplicativo::create([
            "pessoaId" => $request -> pessoaId,
            "aplicativoId" => $request -> aplicativoId,
        ]);

        return response()->json($pessoaAplicativo);
    }
}
