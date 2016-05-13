<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
             <a class="navbar-brand" href="{{ url('/') }}">
                <i class="material-icons inherit">brightness_7</i> Controle de visitas
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
{{--
                @if (Auth::check())
                    <li><a href="{{ url('/visits') }}"><i class="material-icons inherit">home</i> Visitas</a></li>
                @endif
--}}
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Entrar</a></li>
                    <li><a href="{{ url('/register') }}">Nova conta</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <i class="material-icons inherit">account_circle</i> {{ Auth::user()->name }}<span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="material-icons inherit">exit_to_app</i> Sair</a></li>
                        </ul>
                    </li>
                @endif

            </ul>
        </div>
    </div>
</nav>
