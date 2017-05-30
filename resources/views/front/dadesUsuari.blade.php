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
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nom</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ Auth::User()->name }}" readonly="readonly"><br>

                               
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correu electrònic</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ Auth::User()->email }}" readonly="readonly"><br>

                            
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('DNI') ? ' has-error' : '' }}">
                            <label for="DNI" class="col-md-4 control-label">DNI</label>

                            <div class="col-md-6">
                                <input id="DNI" type="text" class="form-control" name="DNI" readonly="readonly" value="{{ Auth::User()->DNI }}" ><br>

                               
                            </div>
                        </div>

                

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a href= 'updateUser'><input type="button" value="Editar" class="btn btn-default"/></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</section>

@stop

@section('scripts')
@stop