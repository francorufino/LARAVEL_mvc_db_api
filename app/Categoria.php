<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

  // public $timestamps = false;
  const CREATED_AT = null;
  const UPDATED_AT = 'ultima_atualizacao';

  protected $table = 'categoria';
  protected $primaryKey = 'categoria_id';
  protected $fillable = ['nome'];


public function filmes(){
  // return $this->hasMany(Filme::class, 'categoria_id', id );     uma categoria tem varios
  // filmes class= primeiro parametro = modelo q representa a tabela q vc ta relacionando./ nome do campo 
  // q vc tem la na tabela de filme / nome do campo q se liga com essa catgorria

}




}
