<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Productos;
use Illuminate\Http\Request;

class JsonController extends Controller
{
    public function enviarproductos()
    {
        $productos = Productos::All();
        return response()->json($productos, 200);
    }
    public function recibirpedido(Request $request)
    {
        //procesasr y salvar datos en la bd pedidos
        if (!empty($request)):
            $data = ['success' => true];
            return response()->json($data, 2000);
        else:
            $data = ['success' => false];
            return response()->json($data, 2000);
        endif;
    }
}
