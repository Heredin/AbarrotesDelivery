@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-sm-4">
            <h1 class=" text-center lead">{{$producto->nombre}}</h1>
<img src="/img/productos/{{$producto->urlfoto}}" alt="{{$producto->nombre}}" class="img-fluid mx-auto d-block">
    <div class="text-center">
    <span>$ {{$producto->precio}}</span>
    <hr>
    {!!$producto->descripcion!!}
     </div>

        </div>
        <div class="col-sm-5 text-center">

            <form action="{{route('carrito.agregar')}}" method="post">
                @csrf
              <input type="hidden" name="id" value="{{$producto->id}}">
              <input type="number" value="1"name="quantity" max="10" min="1" class="mt-1 mb-1">
              <input type="submit" value="AGREGAR" class="btn btn-info   rounded-pill mx-auto d-block">
            </form>
        </div>
        @include('front.resumen')
        <div class="col-sm-12">
            <h4 class="text-center">Productos que te pueden interesar</h4>
            <div class="row">
            @forelse ($productos as $r)
.     <div class="col-sm-3">
<a href="/{{$r->slug}}">
    <img src="/img/productos/{{$producto->urlfoto}}" alt="{{$producto->nombre}}" class="img-fluid mx-auto d-block">
        <p>{{$producto->nombre}}</p>
    </a>
       </div>
            @empty
<div class="jumbotron w-100">
<p class="text-center">No hay mas productos</p>
</div>
            @endforelse
        </div>


        </div>
    </div>
</div>
@endsection
