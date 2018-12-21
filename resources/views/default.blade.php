<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="../proyecto/Proyecto/TpFinal/css/normalize.css">
      <link rel="stylesheet" href="../proyecto/Proyecto/TpFinal/css/dark.css" id="theme_css">
      <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <link rel="stylesheet" href="../proyecto/Proyecto/TpFinal/eliantoFont/stylesheet.css" type="text/css" charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="../proyecto/Proyecto/TpFinal/css/formStyles.css" id="theme2_css">
      <link rel="stylesheet" href="../proyecto/Proyecto/TpFinal/css/perfil.css">
      <link rel="stylesheet" href="../proyecto/Proyecto/TpFinal/css/pisobootstrap.css" id = "theme3_css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<div class="container-fluid header ">
  <div class="btn-group" role="group" aria-label="Basic example">
<button type="button" class="btn btn-secondary" id="dark">Dark</button>
<button type="button" class="btn btn-secondary" id= 'light'>Light</button>
</div>
  <div class="row navBar">
    <div class="col-5  logo">
      <h2><a style="text-decoration:none" href="/"><span id ="logo1">Digital</span><span id="logo2">games</span></h2></a>
    </div>
    <div class="col-7  iconos">
      <div class="row">
      
        <div class="col-12">
          <div class="dropdown show">
            <a class="menuBoton" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ion-navicon-round"></i>
            </a>
            <div class="dropdown-menu menuMovil" aria-labelledby="dropdownMenuLink">
                @auth
                <a class="dropdown-item" style="color:red; font-weight:bold" > {{Auth::user()->nick}}</a>
                <a class="dropdown-item" href="/faq">FAQ</a>
              <a href="/profile" class="dropdown-item">Mi Perfil</a>
              @if (Auth::user()->email=='admin@admin.com')
              <a href="/subirJuego" style="text-decoration:none"><button class="dropdown-item" type="button" >Subir Juego</button></a>
             
              @endif
              <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="dropdown-item" id="cerrarSesion" type="submit" name="logout">Cerrar Sesion</button>
              </form>
              @endauth
              @guest
              <a class="dropdown-item" href="/faq">FAQ</a>
              <a class="dropdown-item" href="/login">Login</a>
              <a class="dropdown-item" href="/register">Registro</a>
              @endguest
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6   categorias">
      <ul class="row  navigation" style="text-align:center;">
        @guest
        <div id="navText" class="col-2"><a id="navText" href="/login"><li>Login</li></a></div>
        <div id="navText" class="col-2"><a id="navText" href="/register"><li>Registro</li></a></div>
        <div id="navText" class="col-3"><a id="navText" href="/faq"><li>Preguntas Frecuentes</li></a></div>
        @endguest
        @auth
        <div id="navText" class="col-3"><a id="navText" href="faq"><li>Preguntas Frecuentes</li></a></div>
        <div id="" class="col-3"><a id="navText" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><li> {{ Auth::user()->nick }} &#9660</li></a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <a href="/profile"style="text-decoration:none"><button class="dropdown-item" type="button" >Mi Perfil</button></a>
            
                @if (Auth::user()->email=='admin@admin.com')
                <a href="/subirJuego" style="text-decoration:none"><button class="dropdown-item" type="button" >Subir Juego</button></a>
                @endif
                
              <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="dropdown-item" id="cerrarSesion" type="submit" name="logout">Cerrar Sesion</button>
              </form>
              
          </div>
        </div>
        @endauth
      
      </ul>
    </div>
    </div>

  </div>

@yield('section')
  <div class="container-fluid footer">
    <div class="row col-12 foot" style="color:white">
      <div class="col-12 col-md-4 col-lg-4">
        <h5>Acerca de nosotros</h5>
        <h6>¿Quiénes somos? </h6>
        <h6>¿Dónde estamos?  </h6>
        <h6>Contáctanos  </h6>
      </div>
      <div class="col-12 col-md-4 col-lg-4">
        <h5>Condiciones de servicio</h5>
        <h6>Condiciones de envío</h6>
        <h6>Condiciones de devolucion</h6>
        <h6>Garantías</h6>
      </div>
      <div class="col-12 col-md-4 col-lg-4">
        <h5>Políticas de privacidad </h5>
        <h6>Política de privacidad </h6>
        <h6>Aviso Legal </h6>
        <h6>Condiciones generales de uso </h6>
      </div>
    </div>
  </div>
  <div class="col-12 nuestrasRedes">
      <h5><span style="color:rgb(172, 37, 37)">Seguinos</span> en nuestras redes sociales!</h5>
    <div class="row col-12">
      <div class="row col-12 col-md-4">
          <i id="iconFooter"  class="ion-social-facebook col-2"style="color:rgb(48, 95, 186)"></i><h4  id="textRedes" class="col-10" style="color:rgb(48, 95, 186)">Seguinos en Facebook</h4>
      </div>
        <div class="row col-12 col-md-4">
          <i id="iconFooter" class="ion-social-instagram-outline col-2"style="color:rgb(186, 48, 127)"></i><h4 id="textRedes" class="col-10" style="color:rgb(186, 48, 127)">Seguinos en Instagram</h4>
        </div>
        <div class="row col-12 col-md-4">
            <i id="iconFooter" class="ion-social-twitter col-2" style="color:rgb(24, 185, 200)"></i><h4  id="textRedes"class="col-10" style="color:rgb(24, 185, 200)">Seguinos en Twitter</h4>
        </div>
    </div>
  </div>
  <div class="col-12 contenedorDerechos">
    <p class="footerDerechos" >© DigitalGames 2018 | Todos los derechos reservados.</p>
  </div>
  <script src="js/validation.js"type="text/javascript"></script>
  <script type="text/javascript"src="js/themes.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
