<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $fillable = ['nome','cpf', 'rg', 'dataNascimento'];

    public function perfil(){

          return $this->hasOne(Perfil::class,"id","id");
    }

    public function aplicativo()
    {
        return $this->hasMany(PessoaAplicativo::class,"pessoaId","id");
    }

}
