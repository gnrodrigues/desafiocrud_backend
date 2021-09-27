<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Pessoa;
use App\Models\Aplicativo;
use App\Models\Perfil;
use App\Models\PessoaAplicativo;
use Illuminate\Database\Seeder;

class PessoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Perfil::create([
            "perfil" => "Usuário Comum"
        ]);
        Perfil::create([
            "perfil" => "Gestor"
        ]);
        Perfil::create([
            "perfil" => "Administrador"
        ]);

        Aplicativo::create([
            "nome" => "FunnyAPP",
            "bundleID" => "1234",
        ]);

        Pessoa::create([
            "nome" => "Joao",
            "dataNascimento" => Carbon::parse('1990-01-01'),
            "cpf" => "15245678901",
            "rg" => "2617311",
            "perfilId" => 1,
        ]);

        Pessoa::create([
            "nome" => "Miguel",
            "dataNascimento" => Carbon::parse('2003-03-02'),
            "cpf" => "43455678901",
            "rg" => "2613311",
            "perfilId" => 2,
        ]);
        PessoaAplicativo::create([
            "pessoaId" => 1,
            "aplicativoId" => 1,
        ]);
      
    }
}
