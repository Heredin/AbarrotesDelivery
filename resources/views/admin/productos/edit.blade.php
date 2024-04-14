@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-8">
            {!!Form::open(['route'=>['admin.productos.update',$producto],'method'=>'PUT','files'=>true])!!}
            <div class="row form-group">

                    {!!Form::label('slug','SLUG') !!}

                    {!!Form::text('slug',$producto->slug,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">

                {!!Form::label('title','title') !!}

                {!!Form::text('title',$producto->title,['class'=>'form-control']) !!}
        </div>
        <div class="row form-group">

            {!!Form::label('description','description') !!}

            {!!Form::text('description',$producto->description,['class'=>'form-control']) !!}
    </div>
    <div class="row form-group">

        {!!Form::label('nombre','nombre') !!}

        {!!Form::text('nombre',$producto->nombre,['class'=>'form-control']) !!}
        <br><br>
        {!!Form::label('descripcion','descripcion') !!}
    </div>
<div class="row form-group">
    {!!Form::textarea('descripcion',$producto->descripcion,['class'=>'form-control']) !!}
</div>

<div class="row form-group">

    {!!Form::label('precio','Precio') !!}

    {!!Form::text('precio',$producto->precio,['class'=>'form-control']) !!}
</div>
<div class="row form-group">

    {!!Form::label('stock','Stock') !!}

    {!!Form::number('stock',$producto->stock,['class'=>'form-control']) !!}
</div>
<div class="row form-group">

    {!!Form::label('unidad','Unidad') !!}

    {!!Form::text('unidad',$producto->unidad,['class'=>'form-control']) !!}
</div>
<div class="row form-group">

    {!!Form::label('orden','Orden') !!}

    {!!Form::text('orden',$producto->orden,['class'=>'form-control']) !!}
</div>
<div class="row form-group">

    {!!Form::label('estado','Estado',['class'=>'mr-2']) !!}

    {!!Form::checkbox('estado',null,$producto->estado) !!}
</div>

<div class="row form-group">
<img src="/img/productos/{{$producto->urlfoto}}">
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
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace('descripcion');
</script>
@endsection
