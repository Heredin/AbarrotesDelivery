@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-8">
            @if(count($detalles))
        <table class="table">
            <thead>
                <th>#</th><th>Cantidad</th><th>Producto</th><th>Precio</th><th>Precio total</th>
            </thead>
            <tbody>

         @foreach ($detalles as $r)
         <tr>
         <td>{{$r->id}}</td>
             <td>{{$r->cantidad}}</td>
             <td>{{$r->productos->nombre}}</td>
             <td>{{$r->productos->precio}}</td>
             <td>{{$r->productos->precio*$r->cantidad}}</td>
            </tr>
         @endforeach

            </tbody>
        </table>
        @else
        <p>No hay pedidos</p>
        @endif
        </div>
    </div>
</div>
@endsection
