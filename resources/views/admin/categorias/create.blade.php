@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-8">
            {!!Form::open(['route'=>['admin.categorias.store'],'method'=>'POST','files'=>true])!!}
            <div class="row form-group">

                    {!!Form::label('slug','SLUG') !!}

                    {!!Form::text('slug',null,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">

                {!!Form::label('title','title') !!}

                {!!Form::text('title',null,['class'=>'form-control']) !!}
        </div>
        <div class="row form-group">

            {!!Form::label('description','description') !!}

            {!!Form::text('description',null,['class'=>'form-control']) !!}
    </div>
    <div class="row form-group">

        {!!Form::label('nombre','nombre') !!}

        {!!Form::text('nombre',null,['class'=>'form-control']) !!}
</div>
<div class="row form-group">

    {!!Form::label('descripcion','descripcion') !!}

    {!!Form::text('descripcion',null,['class'=>'form-control']) !!}
</div>
<div class="row form-group">

    {!!Form::label('urlfoto','urlfoto',['class'=>'mr-2']) !!}

    {!!Form::file('urlfoto') !!}
</div>
            <div class="row form-group">
            <div class="col-sm-6">
            {!!Form::label('portada','Portada',['class'=>'mr-2']) !!}
                {!!Form::checkbox('portada',null)!!}<br>

        </div>
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
