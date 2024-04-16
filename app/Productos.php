<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    //atributos a utilizar en la tabla productos
    protected $fillable = [
        'slug', 'title','description','nombre','descripcion','precio','unidad','stock','urlfoto' ,'visitas','orden','estado','subcategorias_id',
    ];
      //funcion que hace la relacion con el modelo a relacionar
      public function subcategorias(){
        return $this->belongsTo("App\Subcategorias");
    }
    public function detalles(){
        return $this->hasMany("App\Detalles");
    }
}
