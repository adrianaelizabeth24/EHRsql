<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Centro de Ludopatía</a>
    </div>
    <ul class="nav navbar-nav">
      <!-- Authentication Links -->
      @guest
      @else
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Auth::user()->name }}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li> <a class="dropdown-item glyphicon glyphicon-log-out" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();"> </span> Logout</a></li> </a>
              </li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> {{ csrf_field() }} </form>
            </ul>
          </li>

          <ul class="nav navbar-nav">
            <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/paciente">Pacientes</a></li>
            <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/panel_control">Panel de Control</a></li>
          </ul>


      @endguest
    </ul>
  </div>
</nav>