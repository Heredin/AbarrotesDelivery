<?php

namespace App\Http\Controllers;

use App\Productos;
use App\Pedidos;
use App\Detalles;
use Cart;
use Auth;
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

    public function procesopedido(Request $request){
    if(Cart::getContent()->count()>0):
        //proceso
        $pedido =new Pedidos();
        $pedido->codigo= time();
        $pedido->subtotal= number_format(Cart::getSubtotal(),);
        $pedido->impuesto= number_format(Cart::getSubtotal()*0.18,2);
        $pedido->total= number_format(Cart::getSubtotal()*1.18,2);
        $pedido->estado= 0;
        $pedido->user_id= Auth::user()->id;
        $pedido->save();
        foreach(Cart::getContent() as $r):
            $detalle=new Detalles();
            $detalle->cantidad = $r->quantity;
            $detalle->productos_id = $r->id;
            $detalle->pedidos_id = $pedido->id;
            $detalle->save();
        endforeach;
        Cart::clear();
        return view("front.confirmacion")->with(['pedido'=>$pedido->codigo]);
    else:
        return redirect('carrito/checkout');
    endif;
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
