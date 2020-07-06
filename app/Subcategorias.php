<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategorias extends Model
{
    protected $fillable = [
        'slug', 'title','description','nombre','descripcion','urlfoto' ,'visitas','orden','categorias_id',
    ];
    //funcion que hace la relacion cone el modelo a relacionar
    public function categorias(){
        return $this->belongsTo("App\Categorias");
    }
      //funcion que hace la relacion cone el modelo a relacionar
      public function productos(){
        return $this->hasMany("App\Productos");
    }
}
