<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Produto extends Model
{
      protected $fillable = ['nome','tipo','valor','client_id'];

      public function cliente(){
          return $this->belongsTo(Cliente::class, 'client_id');
      }
}