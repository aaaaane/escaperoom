<section id="menu-0">
      <nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top">
        <div class="container">
          <div class="mbr-table">
            <div class="mbr-table-cell">
              <div class="navbar-brand">
                <span class="navbar-logo">
                  <img src="assets/images/logo-blanco-149x128-51.png" alt="escapeRoom">
                </span>
                <a class="navbar-caption" href="{{url('inici')}}">EscapeRoom</a>
              </div>
            </div>
            <div class="mbr-table-cell">
              <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                <div class="hamburger-icon"></div>
              </button>
              <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                <li class="nav-item">
                  <a class="nav-link link" href="{{url('inici')}}" style="color:grey;">PÀGINA PRINCIPAL</a>
                </li>
                @if (!Auth::guest())
                <li class="nav-item">
                  <a class="nav-link link" href="{{url('pagUsuari')}}" style="color:grey;">La meva pàgina</a>
                </li>
                @endif


                <li class="nav-item dropdown">
                  <a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" aria-expanded="false">QUÈ OFERIM?</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{url('sales')}}">Les nostres sales</a>
                    @if (Auth::guest())
                    <a class="dropdown-item" href="{{url('register')}}">Registra't</a>
                    <a class="dropdown-item" href="{{url('login')}}">ENTRA</a>
                    @else
                    <a  class="dropdown-item" href="{{ url('/inici') }}"
                         onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                    @endif

                  </div>
                </li>
                <li class="nav-item nav-btn">
                  @if (Auth::guest())
                  <a class="nav-link btn btn-danger-outline btn-danger" href="{{url('login')}}">RESERVA</a>
                  @else
                  <a class="nav-link btn btn-danger-outline btn-danger" href="{{url('reserva')}}">RESERVA</a>
                  @endif
                </li>
              </ul>
              <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                <div class="close-icon"></div>
              </button>
            </div>
          </div>
        </div>
      </nav>
    </section>