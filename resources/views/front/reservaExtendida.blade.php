@extends('layouts.main')

@section('content')

<div class="section" style="background-color: rgb(48, 48, 48); padding-top: 120px; padding-bottom: 40px; color:grey;">
    <div class="container">
          <div class="row">
            <div class="col-xs-12 text-xs-center">
              <h3 class="mbr-section-title display-2">RESERVA</h3>
              <small class="mbr-section-subtitle">Reserva via web i obtindràs les millors ofertes.</small>
            </div>
          </div>
        </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12"><div class="form-group">
          <p>Introdueix el teu DNI</p>
          <input type="text" id="dni">
          <br><p>Tria la sala</p>
                  <select id="selecciona" name="selecciona">
                    <option value="" selected="selected">- tria -</option>
                    <option value="0">- CSI: Costa Daurada -</option>
                    <option value="1">- El Golpe -</option>
                    <option value="2">- Walter Gate -</option>
                  </select>
                  <br><br><p>Tria la mida del grup</p> <select id="seleccionamidagrup" name="seleccionamidagrup">
                    <option value="" selected="selected">- tria -</option>
                    <option value="0">- Grup petit (De 2 a 5) -</option>
                    <option value="1">- Grup mitjà (De 6 a 10) -</option>
                    <option value="2">- Grup gran (De 10 a 15) -</option>
                  </select> <br><br>
                </div></div>
        </div>
      
          <div class="row"><div class="col-md-12" style="padding-top: 25px;"><input type="submit" id="boto" class="btn btn-info" value="RESERVA"> <p style="color:grey"><a href="{{url('/condicionsLegals')}}">CONDICIONS LEGALS</a></p> <p id="paragraf" style="color: green"></p></div></div>


</div>
  </div>
</div>

    </div>



@stop