@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-8">
            {!!Form::open(['route'=>['admin.productos.store'],'method'=>'POST','files'=>true])!!}
            <div class="row form-group">

                    {!!Form::label('slug','SLUG') !!}

                    {!!Form::text('slug',null,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">

                {!!Form::label('title','Title') !!}

                {!!Form::text('title',null,['class'=>'form-control']) !!}
        </div>
        <div class="row form-group">

            {!!Form::label('description','Description') !!}

            {!!Form::text('description',null,['class'=>'form-control']) !!}
    </div>
    <div class="row form-group">

        {!!Form::label('nombre','Nombre') !!}

        {!!Form::text('nombre',null,['class'=>'form-control']) !!}
</div>
<div class="row form-group">

    {!!Form::label('descripcion','Descripcion') !!}

    {!!Form::text('descripcion',null,['class'=>'form-control']) !!}
</div>
<div class="row form-group">

    {!!Form::label('precio','Precio') !!}

    {!!Form::text('precio',null,['class'=>'form-control']) !!}
</div>
<div class="row form-group">

    {!!Form::label('stock','Stock') !!}

    {!!Form::number('stock',null,['class'=>'form-control']) !!}
</div>
<div class="row form-group">

    {!!Form::label('unidad','Unidad') !!}

    {!!Form::text('unidad',null,['class'=>'form-control']) !!}
</div>
<div class="row form-group">

    {!!Form::label('orden','Orden') !!}

    {!!Form::text('orden',null,['class'=>'form-control']) !!}
</div>
<div class="row form-group">

    {!!Form::label('estado','Estado') !!}

    {!!Form::checkbox('estado',null) !!}
</div>
<div class="row form-group">

    {!!Form::label('urlfoto','urlfoto') !!}

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
