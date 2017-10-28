<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

    protected $fillable = ['nome','sexo','telefone','cpf'];

    public function produtos(){
        return $this->hasMany(Produto::class); //relaciona os models
    }
}
