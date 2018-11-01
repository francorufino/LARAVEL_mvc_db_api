<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $table = 'filme';
    protected $primaryKey = 'filme_id';
    protected $fillable = ['titulo'];

    public function idioma() {
      return $this->hasOne(Idioma::class, 'idioma_id', 'idioma_id');
    }
  }
