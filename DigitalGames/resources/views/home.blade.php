@extends('default')

@section('section')
<div class="container.fluid carouselPrincipal col-8 offset-2">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img id="imagenCarrusel" class="d-block w-100" src="proyecto/Proyecto/TpFinal/images/TombRaider.png" alt="First slide">
      </div>
      <div class="carousel-item">
        <img  id="imagenCarrusel" class="d-block w-100" src="proyecto/Proyecto/TpFinal/images/spiderMan.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img  id="imagenCarrusel" class="d-block w-100" src="proyecto/Proyecto/TpFinal/images/redDeadRedemption.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<?php
  $juegos = [
      ["title"=>'Call Of Duty Black Ops 4',"imagen"=>'CoDBO3.jpg'],
      ["title"=>'Fallout 76',"imagen"=>'fallout76.jpg'],
      ["title"=>'Metro Exodus',"imagen"=>'MetroExodus.jpg'],
      ["title"=>'Pro Evolution Soccer 19',"imagen"=>'pes19.jpg'],
      ["title"=>'Call Of Duty Black Ops 4',"imagen"=>'CoDBO3.jpg'],
      ["title"=>'Fallout 76',"imagen"=>'fallout76.jpg'],

    ];

  $juegos2 = [

      ["title"=>'Red Dead Redemption',"imagen"=>'redDeadRedemptionIcon.jpeg'],
      ["title"=>'Dakar 18',"imagen"=>'dakar.jpg'],
      ["title"=>'Injustice 2',"imagen"=>'Injustice2.jpg'],
    ];
 ?>
<div class="container-fluid estrenos">
  <div class="row">
    <div class="col-8 tituloEstreno">
      <h2>Ultimos <span style="color:rgb(203, 51, 42)">Estrenos</span</h2>
    </div>
      <div class="col-4 tituloEstreno ">
          <h2 style="color:white">Des<span style="color:rgb(203, 51, 42)">tacados</span</h2>
      </div>
  </div>
    <div class="row portadasEstrenos">
        <div class="row col-12 col-md-6 col-lg-8 uno">
        <?php foreach ($juegos as $juego)
        {
        echo  '<div class="contenedorImg col-6 col-lg-2  contPortadas">';
        echo     ' <img class=portrait src="proyecto/Proyecto/TpFinal/images/'.$juego["imagen"].'" alt="">';
        echo      '<p id=nombreJuego2>'.$juego["title"].'</p>';
        echo      '<div class="row col-12 precioCarro">';
        echo        '<div class="col-6 precio">';
        echo          '<h4>$2560,<span style="font-size:15px;">90</span></h4>';
        echo        '</div>';
        echo        '<div class="col-6  carro">';
        echo          '<i class="ion-android-cart"></i>';
        echo       ' </div>';
        echo      '</div>';
        echo  '</div>';
        }
        ?>
      </div>
      <div class="row col-12 col-md-6 col-lg-4 contenedorDestacados">
      <?php foreach ($juegos2 as $juego)
      {
      echo  '<div class="contenedorImg col-6 col-lg-4  contPortadas">';
      echo     ' <img class=portrait src="proyecto/Proyecto/TpFinal/images/'.$juego["imagen"].'" alt="">';
      echo      '<p id=nombreJuego2>'.$juego["title"].'</p>';
      echo      '<div class="row col-12 precioCarro">';
      echo        '<div class="col-6 precio">';
      echo          '<h4>$2560,<span style="font-size:15px;">90</span></h4>';
      echo        '</div>';
      echo        '<div class="col-6  carro">';
      echo          '<i class="ion-android-cart"></i>';
      echo       ' </div>';
      echo      '</div>';
      echo  '</div>';
      }
      ?>
    </div>
    </div>
    <div class="container-fluid">


      <div class="row ">
        <div class="col-12 separador2">

        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 separador">

          </div>
        </div>

      </div>
      <div class="row containerGralJuegos">
        <div class="col-3 cat">
            <ul> <h4>Categorias</h4>

              <li class="categoria">PC</li>
              <li class="categoria">PlayStation3</li>
              <li class="categoria">PlayStation 4</li>
              <li class="categoria">Xbox One</li>
            </ul>
        </div>
        <div class="row col-12 col-lg-9 contenedorJuegos">
          <div class="contenedorImg col-6 col-md-4 col-lg-4 contPortadasIndex">
              <img class="juegosIndex" src="proyecto/Proyecto/TpFinal/images/MetroExodus.jpg" alt="">
              <p id=nombreJuego>Metro Exodus</p>
              <p id="JuegosCat">Juegos Xbox One</p>
              <div class="row precioCarro">
                  <div class="col-12 col-lg-6 precioIndex">
                    <h4>$2560,<span style="font-size:15px;">90</span></h4>
                  </div>

              </div>
              <div class="col-12 enviarCarrito">
                  <button class="" type="button" name="EnviarCarrito">Añadir al carrito</button>
              </div>
          </div>
          <div class="contenedorImg col-6 col-md-4 col-lg-4 contPortadasIndex">
              <img class=juegosIndex src="proyecto/Proyecto/TpFinal/images/Soulcalibur6.jpg" alt="">
              <p id=nombreJuego>Soulcalibur 6</p>
              <p id="JuegosCat">Juegos PS4</p>
              <div class="row precioCarro">
                  <div class="col-12 col-lg-6 precioIndex">
                    <h4>$2560,<span style="font-size:15px;">90</span></h4>
                  </div>

              </div>
              <div class="col-12 enviarCarrito">
                  <button class="" type="button" name="EnviarCarrito">Añadir al carrito</button>
              </div>
          </div>
          <div class="contenedorImg col-6 col-md-4 col-lg-4 contPortadasIndex">
              <img class=juegosIndex src="proyecto/Proyecto/TpFinal/images/spiderManIcon.jpg" alt="">
              <p id=nombreJuego>Spider Man</p>
              <p id="JuegosCat">Juegos PS4</p>
              <div class="row precioCarro">
                  <div class="col-12 col-lg-6 precioIndex">
                    <h4>$2560,<span style="font-size:15px;">90</span></h4>
                  </div>

              </div>
              <div class="col-12 enviarCarrito">
                  <button class="" type="button" name="EnviarCarrito">Añadir al carrito</button>
              </div>

          </div>
          <div class="contenedorImg col-6 col-md-4 col-lg-4 contPortadasIndex">
              <img class="juegosIndex" src="proyecto/Proyecto/TpFinal/images/fallout76.jpg" alt="">
              <p id=nombreJuego>Fallout 76</p>
              <p id="JuegosCat">Juegos Xbox One</p>
              <div class="row precioCarro">
                  <div class="col-12 col-lg-6 precioIndex">
                    <h4>$2560,<span style="font-size:15px;">90</span></h4>
                  </div>

              </div>
              <div class="col-12 enviarCarrito">
                  <button class="" type="button" name="EnviarCarrito">Añadir al carrito</button>
              </div>
          </div>
          <div class="contenedorImg col-6 col-md-4 col-lg-4 contPortadasIndex">
              <img class=juegosIndex src="proyecto/Proyecto/TpFinal/images/pes19.jpg" alt="">
              <p id=nombreJuego>Pro Evolution Soccer 19</p>
              <p id="JuegosCat">Juegos PS4</p>
              <div class="row precioCarro">
                  <div class="col-12 col-lg-6 precioIndex">
                    <h4>$2560,<span style="font-size:15px;">90</span></h4>
                  </div>

              </div>
              <div class="col-12 enviarCarrito">
                  <button class="" type="button" name="EnviarCarrito">Añadir al carrito</button>
              </div>
          </div>
          <div class="contenedorImg col-6 col-md-4 col-lg-4 contPortadasIndex">
              <img class=juegosIndex src="proyecto/Proyecto/TpFinal/images/redDeadRedemptionIcon.jpeg" alt="">
              <p id=nombreJuego>Red Dead Redemption</p>
              <p id="JuegosCat">Juegos PS4</p>
              <div class="row precioCarro">
                  <div class="col-12 col-lg-6 precioIndex">
                    <h4>$2560,<span style="font-size:15px;">90</span></h4>
                  </div>

              </div>
              <div class="col-12 enviarCarrito">
                  <button class="" type="button" name="EnviarCarrito">Añadir al carrito</button>
              </div>

          </div>

        </div>

      </div>

    </div>

@endsection
