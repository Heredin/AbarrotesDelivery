<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTExceptions;
use App\User;
use App\Role;
use Auth;
use JWTAuth;

class UserController extends Controller
{
   public function register(Request $request){
       //encriptando el pass
       $_password=$request->password;
       $password=bcrypt($_password);
       $request->request->add(['password'=>$password]);
       //creando la cuenta
       $user= User::create($request->all());
       $user->roles()->attach(Role::where('name','cliente')->first());


       //login
       $request->request->add(['password'=>$_password]);
       return $this->login($request);

   }
   public function logout(Request $request){
       if(!User::checkToken($request)){
           return response()->json([
            'success' => false,
            'message'=> 'Token es necesario',
           ],442);
       }
       JWTAuth::invalidate(JWTAuth::parseToken($request->token));
       return response()->json([
        'success' => true,
        'message'=> 'Usuario desconocido',
       ]);
   }
   public function login(Request $request){
       $input=$request->only('email','password');
       $jwt_token=null;
       if(!$jwt_token= JWTAuth::attempt($input)){
           return response()->json([
               'success'=>false,
               'message'=>'credenciales inválidas',
           ],401);

       }
       $user=Auth::user();
       return response()->json([
           'success' => true,
           'token'=> $jwt_token,
           'user'=> $user
       ]);
   }
   public function update(Request $request){
   }
   public function getCurrentUser(Request $request){
   }
}
