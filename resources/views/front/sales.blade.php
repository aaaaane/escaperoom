@extends('layouts.main')

@section('content')
<section class="mbr-cards mbr-section mbr-section-nopadding" id="features1-3" style="background-color: rgb(255, 255, 255);">
      <div class="mbr-cards-row row striped">


      @foreach ($rooms as $room)
        <div class="mbr-cards-col col-xs-12 col-lg-4" style="padding-top: 80px; padding-bottom: 80px;">
          <div class="container">
            <div class="card cart-block">
              <div class="card-img">
                <img src="{{$room->image}}" class="card-img-top">
              </div>
              <div class="card-block">
                <h4 class="card-title">{{$room->name}}</h4>
                <p class="card-text">{{$room->description}}</p><br>
                @if ($room->id == 1)
                <a href="{{url('/sala1')}}"><button type="button" class="btn btn-default">Comenta</button></a>

                @elseif ($room->id == 2)
                <a href="{{url('/sala2')}}"><button type="button" class="btn btn-default">Comenta</button></a>


                @elseif ($room->id == 3)
                <a href="{{url('/sala3')}}"><button type="button" class="btn btn-default">Comenta</button></a>
                @endif
            </div>
          </div>
        </div>
      </div>
      @endforeach
      
     </div>
    </section>

@stop