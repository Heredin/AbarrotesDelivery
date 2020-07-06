@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-8">
            {!!Form::open(['route'=>['admin.portadas.store'],'method'=>'POST','files'=>true])!!}
            <div class="row form-group">

                    {!!Form::label('frase','Frase') !!}

                    {!!Form::text('frase',null,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">

                {!!Form::label('link','Link') !!}

                {!!Form::text('link',null,['class'=>'form-control']) !!}
        </div>

         <div class="row form-group">

        {!!Form::label('urlfoto','urlfoto') !!}

         {!!Form::file('urlfoto') !!}
      </div>
            <div class="row form-group">

                {!!Form::checkbox('portada',null)!!}Portada<br>
        </div>
        <div class="row form-group">

            {!!Form::label('orden','Orden') !!}

            {!!Form::text('orden',null,['class'=>'form-control']) !!}
    </div>
    <div class="row form-group">

                {!!Form::submit('GUARDAR',['class'=>'btn btn-success']) !!}

    </div>
    {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection
