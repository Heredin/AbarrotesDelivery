<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use JWTAuth;

class User extends Authenticatable implements JWTSubject
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

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }
    public static function checkToken($token){
        if($token->token)
            return true;
        return false;
    }

      //funcion que hace la relacion con el modelo a relacionar
  public function pedidos(){
    return $this->hasMany("App\Pedidos");
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
