<div class="navbar-inverse navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">           
            @if(Auth::check())
            <li><a href="{{ URL::route('erp') }}"><i class="fa fa-home fa-2x"></i> </a></li>
            <li><a href="{{ URL::route('home') }}"><i class="fa fa-bar-chart fa-2x"></i> </a></li>
           
                 
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Proyectos Propios <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ URL::route('crear-proyecto') }}">Agregar</a></li> 
                        <li class="divider"></li>
                        <li><a href="{{ URL::route('ver-proyectos') }}">Ver Activos</a></li>
                        <li><a href="{{ URL::route('ver-historicos') }}">Ver Historial (Terminados)</a></li>
                        <li><a href="{{ URL::route('ver-eliminados') }}">Ver Eliminados</a></li>
                        
                        <!--<li><a href="#">Something else here</a></li>
                        
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li> -->
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Proyectos Alianza <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ URL::route('crear-proyecto-alianza') }}">Agregar</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ URL::route('ver-proyectos-alianza') }}">Ver Activos</a></li>
                        <li><a href="{{ URL::route('ver-historicos-alianza') }}">Ver Historial (Terminados)</a></li>
                        <li><a href="{{ URL::route('ver-eliminados-alianza') }}">Ver Eliminados</a></li>
                       <!-- <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li> -->
                    </ul>
                </li>
                <li><a href="{{ URL::route('editar-proyecto') }}">Editar Proyectos</a></li>
                <li class="divider"></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Propuestas Económicas<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ URL::route('crear-tipo') }}">Crear Tipos</a></li>
                        <li><a href="{{ URL::route('editar-tipo') }}">Editar Tipos</a></li>
                        <li><a href="{{ URL::route('calcular-tipo') }}">Calcular Propuesta</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ URL::route('ver-tipo') }}">Ver Propuestas</a></li>
                       <!-- <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li> -->
                    </ul>
                </li>
                <li><a href="{{ URL::route('configuraciones') }}">Configuraciones</a></li>
                <li><a href="{{ URL::route('pagos') }}">Pagos</a></li>
                
            @else
                <li><a href="{{ URL::route('index') }}"><i class="fa fa-home fa-2x"></i> </a></li>
                <li><a href="{{ URL::route('account-sign-in') }}"><i class="fa fa-sign-in fa-2x"></i></a></li>   
            @endif
          
          </ul>
            <script>
     $('.dropdown-toggle').dropdown()
</script>
          <ul class="nav navbar-nav navbar-right">
              @if(Auth::check())
                <li><a href="{{ URL::route('account-create') }}">Crear cuenta</a></li> 
                <li><a href="{{ URL::route('account-sign-out') }}"><i class="fa fa-sign-out fa-2x"></i></a>  <!--( {{ Auth::user()->name . ' '. Auth::user()->last_name }} )--></li>
              @endif         
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
