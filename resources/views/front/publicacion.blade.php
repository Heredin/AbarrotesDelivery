@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-sm-15">
            <h1 class=" text-center lead">{{$publicacion->nombre}}</h1>
<img src="/img/publicaciones/{{$publicacion->urlfoto}}" alt="{{$publicacion->nombre}}" class="img-fluid mx-auto d-block">
    <div class="">

    {!!$publicacion->descripcion!!}
    <p class="small text-right"> {{$publicacion->created_at->diffForHumans()}} con {{$publicacion->visitas}} visitas</p>
    <hr>
     </div>

        </div>


    </div>
</div>
@endsection
