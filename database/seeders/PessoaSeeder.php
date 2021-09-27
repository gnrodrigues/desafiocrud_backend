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
            "dataNascimento" => Carbon::parse('2000-01-01'),
            "cpf" => "12345678901",
            "rg" => "2617311",
            "perfilId" => 1,
        ]);

        Pessoa::create([
            "nome" => "Miguel",
            "dataNascimento" => Carbon::parse('2000-01-01'),
            "cpf" => "12455678901",
            "rg" => "2613311",
            "perfilId" => 2,
        ]);

        PessoaAplicativo::create([
            "pessoaId" => 1,
            "aplicativoId" => 1,
        ]);
      
    }
}
