@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-8">
            {!!Form::open(['route'=>['admin.portadas.update',$portada],'method'=>'PUT','files'=>true])!!}
            <div class="row form-group">

                    {!!Form::label('frase','Frase') !!}

                    {!!Form::text('frase',$portada->frase,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">

                {!!Form::label('link','Link') !!}

                {!!Form::text('link',$portada->link,['class'=>'form-control']) !!}
        </div>

<div class="row form-group">
<img src="/img/portadas/{{$portada->urlfoto}}"class="img-fluid">
    {!!Form::label('urlfoto','urlfoto',['class'=>'mr-2']) !!}

    {!!Form::file('urlfoto') !!}
</div>
<div class="row form-group">

    {!!Form::label('orden','Orden') !!}

    {!!Form::text('orden',$portada->orden,['class'=>'form-control']) !!}
</div>
<div class="row form-group">

                {!!Form::submit('GUARDAR',['class'=>'btn btn-success']) !!}
            </>
    </div>
    {!!Form::close()!!}
        </div>
    </div>
</div>

@endsection
