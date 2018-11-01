<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ator extends Model
{
  // public $timestamps = false;
  const CREATED_AT = null;
  const UPDATED_AT = 'ultima_atualizacao';

  protected $table = 'ator';
  protected $primaryKey = 'ator_id';
  protected $fillable = ['primeiro_nome', 'ultimo_nome'];

  public function getNomeCompleto(){
    return $this->primeiro_nome .' '. $this->ultimo_nome;
  }

  public function filmesEAtores(){
    return $this->belongsToMany(Filme::class,'filme_ator','filme_id','ator_id');
  }
}

// belongsToMany:
// 1o parametro: classe q estou querendo relacionar
// 2o. parametro: nome da tabela q te a relacao entre o ator e o filme
// 3o. parametro: nome do campo la no filme, nome do campo que representa o filme q a gente ta querendo relacionar
// 4o. parametro: qual o campo nessa tabela q reprenta o ator
