<?php

namespace App\Http\Controllers;

use App\Productos;
use Cart;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function agregar(Request $request)
    {
        $producto = Productos::find($request->id);
        Cart::add(
            $producto->id,
            $producto->nombre,
            $producto->precio,
            $request->quantity,
            array("unidad" => $producto->unidad)
        );
        return back()->with('success', "$producto->nombre ! se ha agregado al carrito");
    }

    public function checkout()
    {
        return view('front.checkout');
    }

    public function remover(Request $request)
    {
        $producto = Productos::find($request->id);
        Cart::remove(['id' => $request->id]);
        return back()->with('success', "$producto->nombre !Producto Eliminado ");
    }
    public function vaciar()
      {
        Cart::clear();
        return back()->with('success', "!Carrito vacío ");
    }
}
