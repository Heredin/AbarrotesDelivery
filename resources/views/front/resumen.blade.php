<div class="col-sm-2 bg-light">
<h2>Resumen</h2>
@if (count(Cart::getContent()))
@foreach (Cart::getContent() as $item)
<small>{{$item->name}}...{{$item->price}}</small>
@endforeach
Total $. {{number_format(Cart::getSubTotal(),2)}}
<a href="/carrito/checkout" class="btn btn-success"> Ver carrito</a>
@else
<P>Carrito vacío</P>
@endif
</div>
