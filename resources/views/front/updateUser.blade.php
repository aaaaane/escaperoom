@extends('layouts.main')

@section('content')
<section class="mbr-section mbr-after-navbar" id="form1-s" style="background-color: rgb(46, 46, 46); padding-top: 120px; padding-bottom: 120px;">
 <div class="container">
<div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
             <div class="mbr-table-cell mbr-right-padding-md-up col-md-8 text-xs-center text-md-left">
             <font color="grey"><h3>Modifica les teves dades</h3></font><br>
             <div class="panel-body">

              {!! Form::open([ 'method' => 'post', 'novalidate']) !!}
              {{ csrf_field() }}
              {!! Form::hidden('id', Auth::user()->id) !!}
              {!! Form::label('name', 'Nom: ') !!}
              {!! Form::text('name', Auth::User()->name, ['class' => 'form-control']) !!}
              {!! Form::label('email', 'Correu electrònic: ') !!}
              {!! Form::text('email', Auth::User()->email, ['class' => 'form-control', 'readonly']) !!}
              {!! Form::label('DNI', 'DNI: ') !!}
              {!! Form::text('DNI', Auth::User()->DNI, ['class' => 'form-control', 'readonly']) !!}
              
              {!! Form::label('password', 'Contrasenya: ') !!}
              <div class='form-control'>
              {!! Form::password('password',null, ['class' => 'form-control']) !!}
              </div>
              <br>

<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit('Actualitza', ['class' => 'btn btn-success ' ] ) !!}

               {!!Form::close()!!}

              </div>
             </div>
            </div>
        </div>
</div>

</div>
</section>
@stop