@extends('layouts.main')

@section('content')
<section class="mbr-section mbr-after-navbar" id="form1-s" style="background-color: rgb(46, 46, 46); padding-top: 120px; padding-bottom: 120px;">
    
    <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2">ENTRA</h3>
                    <small class="mbr-section-subtitle">Si ets client i ja estàs registrat, entra!</small>
                </div>
            </div>
        </div>
    </div>
 <div class="row">
          <div class="col-md-12" align="center">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">

            {{ csrf_field() }}

              <div class="form-group">
                <div class="col-sm-10 col-lg-12">
                  <input type="email" class="form-control" id="inputEmail3" placeholder="Correu electrònic">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-10 col-lg-12">
                  <input type="password" class="form-control" id="inputPassword3" placeholder="Contrasenya">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10 col-lg-3 col-lg-offset-0">
                  <div class="checkbox">
                    <label>
                      <font color="#FFFFFF"><input type="checkbox">Segueix connectat</font></label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10 col-lg-offset-0">
                 <input type="submit" value="ENTRA" align="left" class="btn btn-default"> 
                </div>
              </div>
            </form>
          </div>
        </div>
    </div>
</section>

@stop