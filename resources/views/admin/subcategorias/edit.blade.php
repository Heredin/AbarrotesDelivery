@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-8">
            {!!Form::open(['route'=>['admin.subcategorias.update',$subcategoria],'method'=>'PUT','files'=>true])!!}
            <div class="row form-group">

                    {!!Form::label('slug','SLUG') !!}

                    {!!Form::text('slug',$subcategoria->slug,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">

                {!!Form::label('title','title') !!}

                {!!Form::text('title',$subcategoria->title,['class'=>'form-control']) !!}
        </div>
        <div class="row form-group">

            {!!Form::label('description','description') !!}

            {!!Form::text('description',$subcategoria->description,['class'=>'form-control']) !!}
    </div>
    <div class="row form-group">

        {!!Form::label('nombre','nombre') !!}

        {!!Form::text('nombre',$subcategoria->nombre,['class'=>'form-control']) !!}
        <br><br>
        {!!Form::label('descripcion','descripcion') !!}
    </div>
<div class="row form-group">



    {!!Form::textarea('descripcion',$subcategoria->descripcion,['class'=>'form-control']) !!}
</div>
<div class="row form-group">
<img src="/img/subcategorias/{{$subcategoria->urlfoto}}">
    {!!Form::label('urlfoto','urlfoto',['class'=>'mr-2']) !!}

    {!!Form::file('urlfoto') !!}
</div>
            <div class="row form-group">

            <div class="col-sm-6">
                {!!Form::submit('GUARDAR',['class'=>'btn btn-success']) !!}
            </div>
    </div>
    {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection
