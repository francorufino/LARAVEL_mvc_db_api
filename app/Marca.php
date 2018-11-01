<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = "marca";
    protected $primaryKey = "marca_id";
    protected $fillable = ['site', 'nome', 'logo'];
}
