<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','celular','direccion','estado','tipo', 'password',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

      //funcion que hace la relacion cone el modelo a relacionar
  public function pedidos(){
    return $this->belongsTo("App\Pedidos");
}
public function roles(){
    return $this->belongsToMany("App\Role");
}
public function hasRole($role){
   if($this->roles()->where('name',$role)->first()){
       return true;
   }
   return false;
}
}
