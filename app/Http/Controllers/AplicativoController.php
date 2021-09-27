<?php

namespace App\Http\Controllers;

use App\Models\Aplicativo;
use Illuminate\Http\Request;

class AplicativoController extends Controller
{
    public function index()
    {
        $aplicativo = Aplicativo::all();
        return response()->json($aplicativo);
    }



    public function store(Request $request)
    {
        $request->validate([
            "nome" => "required",
            "bundleID" => "required",  
        ]);
        $aplicativo = Aplicativo::create([
            "nome" => $request -> nome,
            "bundleID" => $request -> bundleID,
        ]);

        return response()->json($aplicativo);
    }


    public function update(Request $request, Aplicativo $aplicativo)
    {
        $request->validate([
            "nome" => "required",
            "bundleID" => "required",  
        ]);
        $aplicativo->Aplicativo::update([
            "nome" => $request -> nome,
            "bundleID" => $request -> bundleID,
        ]);

        return response()->json($aplicativo);
    }
}
