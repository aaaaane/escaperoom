@extends('layouts.main')

@section('content')
<section class="engine">
    </section>
    <section class="mbr-slider mbr-section mbr-section__container carousel slide mbr-section-nopadding mbr-after-navbar" data-ride="carousel" data-keyboard="false" data-wrap="true" data-pause="false" data-interval="5000" id="slider-0">
      <div>
        <div>
          <div>
            <ol class="carousel-indicators">
              <li data-app-prevent-settings="" data-target="#slider-0" data-slide-to="0" class="active"></li>
              <li data-app-prevent-settings="" data-target="#slider-0" data-slide-to="1"></li>
              <li data-app-prevent-settings="" data-target="#slider-0" class="" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              

            @foreach ($rooms as $room)


              <div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full 
              @if ($loop->first)
              active
              @endif
              " data-bg-video-slide="false" style="background-image: url({{$room->image}});">
                <div class="mbr-table-cell">
                  <div class="mbr-overlay"></div>
                  <div class="container-slide container">
                    <div class="row">
                      <div class="col-md-8 col-md-offset-2 text-xs-center">
                        <h2 class="mbr-section-title display-1">{{$room->name}}</h2>
                        <p class="mbr-section-lead lead">{{$room->description}}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach


            </div>
            <a data-app-prevent-settings="" class="left carousel-control" role="button" data-slide="prev" href="#slider-0">

                    <span class="icon-prev" aria-hidden="true"></span>

                    <span class="sr-only">Anterior</span>

                </a>
            <a data-app-prevent-settings="" class="right carousel-control" role="button" data-slide="next" href="#slider-0">

                    <span class="icon-next" aria-hidden="true"></span>

                    <span class="sr-only">Següent</span>

                </a>
          </div>
        </div>
      </div>
    </section>
    
    <section class="mbr-section mbr-parallax-background" id="testimonials4-5" style="background-image: url(assets/images/asylum-2000x1328-34.jpg); padding-top: 120px; padding-bottom: 120px;">
      <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(34, 34, 34);"></div>
      <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 text-xs-center">
              <h3 class="mbr-section-title display-2">El que diuen els nostres usuaris</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="mbr-section mbr-section-nopadding">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
            @foreach ($comments as $comment)
              <div class="mbr-testimonial card">
                <div class="card-block">
                  <p>
                  @if ($comment->stars == 5)
                    @for($i = 1; $i <= 5; $i++)
                    <img src="imatges/estrellaEncesa.png" alt="rate" class="img-rounded img-responsive">
                    @endfor
                     @elseif ($comment->stars == 4)
                     @for($i = 1; $i <= 4; $i++)
                    <img src="imatges/estrellaEncesa.png" alt="rate" class="img-rounded img-responsive">
                    @endfor
                     <img src="imatges/estrellaApagada.png" alt="rate" class="img-rounded img-responsive">

                     @elseif ($comment->stars == 3)
                     @for($i = 1; $i <= 3 ; $i++)
                    <img src="imatges/estrellaEncesa.png" alt="rate" class="img-rounded img-responsive">
                    @endfor
                    @for($i = 1; $i <= 2; $i++)
                     <img src="imatges/estrellaApagada.png" alt="rate" class="img-rounded img-responsive"> 
                     @endfor
                     @elseif ($comment->stars == 2)
                     @for($i = 1; $i <= 2 ; $i++)
                    <img src="imatges/estrellaEncesa.png" alt="rate" class="img-rounded img-responsive">
                    @endfor
                    @for($i = 1; $i <= 3; $i++)
                     <img src="imatges/estrellaApagada.png" alt="rate" class="img-rounded img-responsive"> 
                     @endfor
                     @elseif ($comment->stars == 1)
                    <img src="imatges/estrellaEncesa.png" alt="rate" class="img-rounded img-responsive">
                    @for($i = 1; $i <= 4; $i++)
                     <img src="imatges/estrellaApagada.png" alt="rate" class="img-rounded img-responsive"> 
                     @endfor
                     @elseif ($comment->stars == 0)
                    @for($i = 1; $i <= 5; $i++)
                     <img src="imatges/estrellaApagada.png" alt="rate" class="img-rounded img-responsive"> 
                     @endfor
                  @endif
                  {{$comment->comment}}</p>
                </div>
                <div class="mbr-author card-footer">
                  <div class="mbr-author-name">{{$comment->user->name}}</div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="mbr-info mbr-section mbr-section-md-padding" id="msg-box2-6" style="background-color: rgb(46, 46, 46); padding-top: 60px; padding-bottom: 90px;">

      <div class="container">
        <div class="row">    

                        <div class="mbr-table-cell mbr-right-padding-md-up col-md-8 text-xs-center text-md-left">
 @if (Auth::guest())
                            <font color="grey"><h3>Ja estàs registrat?</h3></font>

                            <h2 class="mbr-info-subtitle mbr-section-subtitle">Entra!</h2>

                        </div>
                
        </div>
        <div class="row">
          <div class="col-md-12" align="center">
          
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label" style="color:grey">Correu Electrònic</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong style="color:red">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label" style="color:grey">Contrasenya</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control"  name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong style="color:red">{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-10 col-lg-12">
                                <div class="checkbox">
                                    <label style="color:grey">
                                        <input type="checkbox" name="remember"> Recorda el meu usuari
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-default">
                                    Entra
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Has oblidat la contrasenya?
                                </a>
                            </div>
                        </div>
                    </form>
                    @else
                    <form class="form-horizontal" role="form"  action="{{ url('/pagUsuari') }}">
                    <button type="submit" class="btn btn-default">
                                    Ves a la meva pàgina
                                </button>
                      </form>
                    @endif

          </div>
        </div>
        </section>
@stop

@section('scripts')
<script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js "></script>
@stop