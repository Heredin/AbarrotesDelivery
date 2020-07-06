<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalles extends Model
{
    protected $fillable = [
       'cantidad','productos_id','pedidos_id'
    ];
    //funcion que hace la relacion cone el modelo a relacionar
    public function pedidos(){
        return $this->belongsTo("App\Pedidos");
    }
    public function productos(){
        return $this->belongsTo("App\Productos");
    }

}