@extends('layouts.main')

@section('content')
<section class="mbr-section mbr-after-navbar" id="form1-s" style="background-color: rgb(46, 46, 46); padding-top: 120px; padding-bottom: 120px;">
<div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
 <h3 class="mbr-section-title display-2"
                   >Pàgina de l'usuari</h3>
                   <br>
                   <br>

                   @if (Auth::User()->name === 'admin')
                   <a href="{{url('/gestioReserves')}}"><button type="button" class="btn btn-default">Gestiona les reserves</button></a>

                   @else
                   <a href="{{url('/reserva')}}"><button type="button" class="btn btn-default">Fer una nova reserva</button></a>
                   <br> <br>
                   <a href="{{url('/veureReserves')}}"><button type="button" class="btn btn-default">Veure les meves reserves</button></a>
                   <br> <br>
                   <a href="{{url('/dadesUsuari')}}"><button type="button" class="btn btn-default">Modificar les meves dades</button></a>
                   @endif
                   <br><br>
                </div>
            </div>
        </div>
    </div>
    </section>

@stop

@section('scripts')
@stop