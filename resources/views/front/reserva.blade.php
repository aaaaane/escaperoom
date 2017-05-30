@extends('layouts.main')
@section('css')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">

@stop
@section('content')
<section class="mbr-section" id="pricing-table1-e" style="background-color: rgb(48, 48, 48); padding-top: 120px; padding-bottom: 10px;">
    <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 text-xs-center">
              <h3 class="mbr-section-title display-2">RESERVA</h3>
              <small class="mbr-section-subtitle">Reserva via web i obtindràs les millors ofertes.</small>
            </div>
          </div>
        </div>
      </div>
       <div class="mbr-section mbr-section-nopadding mbr-price-table" style="align='center'">
        <div class="row">
          <div class="col-xs-12 col-md-6 col-xl-4 col-lg-offset-4">
            <div class="mbr-plan card text-xs-center">
              <div class="mbr-plan-header card-block">
                <div class="card-title">
                  <h3 class="mbr-plan-title">Preu</h3>
                  <small class="mbr-plan-subtitle">de 2 a 5 jugadors</small>
                </div>
                <div class="card-text">
                  <div class="mbr-price">
                    <span class="mbr-price-value">€</span>
                    <span class="mbr-price-figure">10,00</span>
                    <small class="mbr-price-term">per jugador</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="mbr-section mbr-after-navbar" id="form1-f" style="background-color: rgb(48, 48, 48); padding-top: 25px; padding-bottom: 120px;">
      <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 text-xs-center">
              <small class="mbr-section-subtitle">RESERVA ARA!!</small>
            </div>
          </div>
        </div>
      </div>
      <div class="mbr-section mbr-section-nopadding">
        <div class="container">
          <div class="row">
      
                 {!! Form::open([ 'method' => 'post', 'novalidate']) !!}
                        {{ csrf_field() }}

            <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">
               <div class="form-group has-success">
<br>

{!! Form::hidden('user_id', Auth::user()->id, ['class' => 'form-control' , 'required' => 'required']) !!}

               {!! Form::label('name_user', 'Nom i cognoms: *') !!}
               {!! Form::text('name_user', null, ['class' => 'form-control' , 'required' => 'required']) !!}
          </div>
        <div class="form-group">
          {!! Form::label('email', 'Correu electrònic: *') !!}
                      {!! Form::text('email', null, ['class' => 'form-control' , 'required' => 'required']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('phone', 'Telèfon: *') !!}
                      {!! Form::text('phone', null, ['class' => 'form-control' , 'required' => 'required']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('country', 'País: ') !!}
                      {!! Form::text('country', null, ['class' => 'form-control']) !!}
        </div>
                <div class="row">
          <div class="row">
          <div class="col-md-6"><div id="calendar-container">

          {!! Form::label('date', 'Tria el dia: ') !!}
                      {!! Form::text('date', null, ['class' => 'form-control', 'id' => 'datepicker' , 'required' => 'required']) !!}
                  </div></div>
          <div class="col-md-12"><div class="form-group">
         {!! Form::label('DNI', 'DNI: *') !!}
                      {!! Form::text('DNI', null, ['class' => 'form-control', 'required' => 'required']) !!}
          <br>
          {!! Form::label('room_id', 'Tria la sala: *') !!}
                      {!! Form::select('room_id', array('1' => '- CSI Costa Daurada -', '2' => '- El Golpe -', '3' => '- Walter Gate - '), ['class' => 'form-control']) !!}
                  <br><br>


                  {!! Form::label('numpeople', 'Mida del grup: *') !!}

                  {!! Form::select('numpeople', array('2' => '- 2 -', '3' => '- 3 -', '4' => '- 4 -', '5' => '- 5 -', ), ['class' => 'form-control']) !!}

                </div></div>
        </div>
      
          <div class="row"><div class="col-md-12" style="padding-top: 25px;"><p style="color:grey"><a href="{{url('/condicionsLegals')}}">CONDICIONS LEGALS</a></p> <p id="paragraf" style="color: green"></p></div></div>


</div>

</div>
                  {!! Form::submit('Reservar', ['class' => 'btn btn-success ' ] ) !!}

                  {!!Form::close()!!}
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

@stop
@section('scripts')

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

    <script type="text/javascript">
      document.getElementById("boto").addEventListener("click", function(){document.getElementById("paragraf").innerHTML="Reserva realitzada correctament!"; alert("Reserva realitzada correctament!")}, false);
    </script>
@stop
