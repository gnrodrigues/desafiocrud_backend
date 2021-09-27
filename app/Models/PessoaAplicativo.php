<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PessoaAplicativo extends Model
{
    public function pessoa(){
        return $this->hasMany(Pessoa::class,"pessoaId","id");
  }

  public function aplicativo()
  {
      return $this->hasMany(Aplicativo::class,"aplicativoId","id");
  }
}
