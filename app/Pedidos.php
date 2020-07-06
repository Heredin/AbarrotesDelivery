<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
       //atributos a utilizar en la tabla productos
       protected $fillable = [
         'codigo','subtotal','impuesto','total','estado','user_id',
    ];
      //funcion que hace la relacion cone el modelo a relacionar
      public function user(){
        return $this->belongsTo("App\User");
    }

    public function detalles(){
        return $this->belongsTo("App\Detalles");
    }
}
