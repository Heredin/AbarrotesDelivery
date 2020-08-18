@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row justify-content-center">
            @forelse ($subcategoria->productos as $r)
            <div class="col-sm-4 mt-5 mb-5">
                <div class="card shadow">
                    <a href="/{{$r->slug}}" title="{{$r->nombre}}">
                <img src="/img/productos/{{$r->urlfoto}}" class="card-img-top" alt="Comprar {{$r->nombre}}">
                    </a>
                <div class="card-body">
                    <p class="text-center">$. {{$r->precio}}</p></div>
                    <div class="card-footer">
                    <a href="/productos/{{$r->slug}}" class="btn btn-outline-success rounded-pill btn-block">{{$r->nombre}}</a>
                    <form action="{{route('carrito.agregar')}}" method="post">
                        @csrf
                      <input type="hidden" name="id" value="{{$r->id}}">
                      <input type="number" value="1"name="quantity" max="10" min="1" class="mt-1 mb-1">
                      <input type="submit" value="AGREGAR" class="btn btn-outline-secondary rounded-pill btn-block">
                    </form>
                </div>
                </div>
            </div>

            @empty

            @endforelse
            </div>
        </div>
        @include('front.resumen')
        <div class="col-sm-10 mt-5">
            <h2>Novedades</h2>

            @forelse ($blog as $r)
            <div class="row mt-3 mb-3">
        <div class="col-sm-4">
        <a href="/blog/{{$r->slug}}"><img src="/img/publicaciones/{{$r->urlfoto}}" alt="{{$r->nombre}}" class="img-fluid"></a>
        </div>
        <div class="col-sm-8">
        <h3><a href="/blog/{{$r->slug}}">{{$r->nombre}}</a></h3>
        <p>{{$r->description}}</p>
        <p class="small">{{$r->created_at->diffForHumans()}}</p>
        </div>
        </div>
             @empty
        <p>No hay publicaciones</p>
             @endforelse

        </div>
    </div>
</div>
@endsection
