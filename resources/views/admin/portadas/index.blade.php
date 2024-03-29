@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-8">
            <a class="btn btn-success" href="{{ route('admin.portadas.create')}}">Nuevo</a>
            @if(count($portadas))
        <table class="table">
            <thead>
                <th>#</th><th>Frase</th><th>Accion</th>
            </thead>
            <tbody>

         @foreach ($portadas as $r)
         <tr>
         <td>{{$r->id}}</td>
             <td>{{$r->frase}}</td>

             <td>

                 <a class="btn btn-primary" href="{{ route('admin.portadas.edit',$r->id)}}">Editar</a>
                {!!Form::open(['method'=>'DELETE','route'=>['admin.portadas.destroy',$r->id],'style'=>'display:inline']) !!}
                {!!Form::submit('ELIMINAR',['class'=>'btn btn-danger'])!!}
                {!!Form::close() !!}
            </td>
            </tr>
         @endforeach

            </tbody>
        </table>
        @else
        <p>No hay registros</p>
        @endif
        </div>
    </div>
</div>
@endsection
