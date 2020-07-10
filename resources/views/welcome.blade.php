@extends('layouts.app')
@section('content')
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @forelse ($portadas as $r)

        <div class="carousel-item @if ($loop->index==0) active @endif">
        <img height="500" src="/img/portadas/{{$r->urlfoto}}" class="d-block w-100" alt="{{$r->frase}}">
          </div>
        @empty
        @endforelse
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


 <div class="container pb-5">
    <div class="row justify-content-center">
        <div class="col-sm-12 mt-5 m"><h1 class="text-center">Abarrotes Delivery</h1></div>
        <div class="col-sm-4">
            <div class="card shadow"></div>
                <img src="https://previews.123rf.com/images/seamartini/seamartini1701/seamartini170100556/69602673-fruter%C3%ADa-tienda-o-mostrador-vitrina-soporte-del-mercado-con-la-cosecha-fresco-granja-de-frutas-y-bayas.jpg" class="card-img-top">
            <div class="card-body">
                Un nuevo negocio
                <div class="card-footer">
                    <a href="/" class="btn btn-outline-success rounded-pill btn-block">Producto</a>
                </div>
            </div>

          </div>
          <div class="col-sm-4">
            <div class="card shadow"></div>
                <img src="https://pbs.twimg.com/media/C2nQxLDXAAIr06U.jpg" class="card-img-top">
            <div class="card-body">
                Un nuevo negocio
                <div class="card-footer">
                    <a href="/" class="btn btn-outline-success rounded-pill btn-block">Producto</a>
                </div>
            </div>

          </div>
          <div class="col-sm-4">
            <div class="card shadow"></div>
                <img src="https://pbs.twimg.com/media/Cxc3jvTXAAAGqYC.jpg:large" class="card-img-top">
            <div class="card-body">
                Un nuevo negocio
                <div class="card-footer">
                    <a href="/" class="btn btn-outline-success rounded-pill btn-block">Producto</a>
                </div>
            </div>

          </div>


            </div>
        </div>
@endsection
