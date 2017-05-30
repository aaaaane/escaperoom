@extends('layouts.main')

@section('content')
<section class="mbr-cards mbr-section mbr-section-nopadding" id="features1-3" style="background-color: rgb(48, 48, 48);">
      <div class="mbr-cards-row row striped">


      @foreach ($rooms as $room)
      @if ($room->id == 3)
        <div class="mbr-cards-col col-xs-12 col-lg-4" style="padding-top: 80px; padding-bottom: 80px; ">
          <div class="container">
            <div class="card cart-block">
              <div class="card-img">
                <img src="{{$room->image}}" class="card-img-top">
              </div>
              <div class="card-block">
                <h4 class="card-title">{{$room->name}}</h4>
                <p class="card-text">{{$room->description}}</p><br>
               @if (Auth::guest())
                  <a href="{{url('/login')}}"><button type="button" class="btn btn-default">Per a comentar has d'entrar al lloc</button></a>
                @endif
                
 @endif
  @endforeach
<a href="{{url('sala2')}}" ><input type="button" value="Sala anterior" class="btn btn-default"/></a>
            </div>
          </div>
        </div>

              
      </div>
      
      
     </div>
@if (!Auth::guest())
    <div class="container" style="padding-top: 10px; padding-left: 20%; background-color: rgb(48, 48, 48); color:grey;">
            <div class="row">
                <div class="col-md-8">
                  <div class="page-header">
                    <h1> Comentaris </h1>
                  </div> 
                   <div class="comments-list">
                   @foreach ($comments as $comment)
                   @if ($comment->room_id == 3)
                       <div class="media">
                            <div class="media-body">
                                
                              <h4 class="media-heading user_name" style="color: white">{{$comment->user->name}}</h4>
                              {{$comment->comment}}
                              <p>--------------------------------------------</p>
                            </div>
                          </div>
                          @endif
                          @endforeach
                   </div>
                    
              
                    
                </div>
            </div>
        </div>
        <div class="container" style="padding-top: 25px; background-color: rgb(48, 48, 48); padding-left: 30%;">
  <div class="row">
    <h3>Deixa el teu comentari</h3>
  </div>
    <div class="row">
    
    <div class="col-md-6">
                <div class="widget-area no-padding blank">
                <div class="status-upload">
                <!--'route' => 'comment.store',-->
                 
                 {!! Form::open([ 'method' => 'post', 'novalidate']) !!}
                        {{ csrf_field() }}

                    <p>Nom d'usuari: {{Auth::user()->name}}</p>
                    {!! Form::hidden('user_id', Auth::user()->id, ['class' => 'form-control' , 'required' => 'required']) !!}
                    {!! Form::hidden('room_id', '3', ['class' => 'form-control' , 'required' => 'required']) !!}


                    <div class="form-group">
                      {!! Form::label('stars', 'Estrelles: ') !!}
                      {!! Form::text('stars', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                  </div>
                  <div class="form-group">
                      {!! Form::label('comment', 'Comentari: ') !!}
                      {!! Form::text('comment', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                  </div>
                <div class="form-group">
                      {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
                  </div>
                  {!!Form::close()!!}
                </div>
              </div>
            </div>
        
    </div>
</div>

 

@endif

 </section>
 

@stop
@section('scripts')

@stop