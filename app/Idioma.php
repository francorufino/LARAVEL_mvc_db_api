<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
  protected $table = 'idioma';
  protected $primaryKey = 'idioma_id';
  protected $fillable = ['nome'];
  protected $dates = ['ultima_atualizacao'];

public function filmes(){
  return $this->hasMany(Filme::class,'idioma_id','idioma_id');


  // 1o parametro = classe do modelo q estou querendo relacionar;
  // 2o parametro = nome do campo la no filme q tem la no campo;
  // 3o parametro = esse terceiro parametro, na maioria das vezes vai ser a chave primaria, nome do campo da tabela do idoma q tem relacao
  // com o idoma q estamos relacionando q eh a chave primaria. ou podemos pensar q esse terceiro campo eh o q relacionando com o segundo
  // ou q esta mais perto desse segundo
  //

}



}
