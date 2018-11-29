@extends('default')

@section('section')
<div class="container.fluid carouselPrincipal col-12  col-lg-8-offset-2">
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
  $estrenos = [
      ["title"=>'Call Of Duty Black Ops 4',"imagen"=>'CoDBO3.jpg', "plataforma"=>'Xbox One'],
      ["title"=>'Fallout 76',"imagen"=>'fallout76.jpg', "plataforma"=>'Xbox One'],
      ["title"=>'Metro Exodus',"imagen"=>'MetroExodus.jpg', "plataforma"=>'Xbox One'],
      ["title"=>'Pro Evolution Soccer 19',"imagen"=>'pes19.jpg',"plataforma"=>'PlayStation 4'],
      ["title"=>'Call Of Duty Black Ops 4',"imagen"=>'CoDBO3.jpg', "plataforma"=>'Xbox One'],
      ["title"=>'Dakar 18',"imagen"=>'dakar.jpg',"plataforma"=>'PlayStation 4'],

    ];

  $destacados = [

      ["title"=>'Red Dead Redemption',"imagen"=>'redDeadRedemptionIcon.jpeg'],
      ["title"=>'Dakar 18',"imagen"=>'dakar.jpg',"plataforma"=>'PlayStation 4'],
      ["title"=>'Injustice 2',"imagen"=>'Injustice2.jpg'],
    ];
    $juegos = [
        ["title"=>'Call Of Duty Black Ops 4',"imagen"=>'CoDBO3.jpg', "plataforma"=>'Xbox One'],
        ["title"=>'Fallout 76',"imagen"=>'fallout76.jpg', "plataforma"=>'Xbox One'],
        ["title"=>'Metro Exodus',"imagen"=>'MetroExodus.jpg', "plataforma"=>'Xbox One'],
        ["title"=>'Pro Evolution Soccer 19',"imagen"=>'pes19.jpg', "plataforma"=>'PlayStation 4'],
        ["title"=>'Battlefield 1',"imagen"=>'Battlefield 1 revolution.jpg', "plataforma"=>'PlayStation 4'],
        ["title"=>'marvel vs Capcom',"imagen"=>'marvelvscapcom.jpg', "plataforma"=>'PlayStation 4'],
        ["title"=>'Red Dead Redemption',"imagen"=>'redDeadRedemptionIcon.jpeg', "plataforma"=>'PlayStation 4'],
        ["title"=>'Naruto',"imagen"=>'naruto.jpeg',"plataforma"=>'Xbox One'],
        ["title"=>'Injustice 2',"imagen"=>'Injustice2.jpg', "plataforma"=>'PlayStation 4'],
        ["title"=>'FarCry 5',"imagen"=>'FarCry5.jpg', "plataforma"=>'PlayStation 4'],
        ["title"=>'Soul Calibur 6',"imagen"=>'Soulcalibur6.jpg', "plataforma"=>'PlayStation 4']
      ];


 ?>
<div class="container-fluid estrenos">

    <div class="tituloEstreno">
      <h2>Ultimos <span style="color:rgb(203, 51, 42)">Estrenos</span</h2>

      <!-- <div class="col-4 tituloEstreno ">
          <h2 style="color:white">Des<span style="color:rgb(203, 51, 42)">tacados</span</h2>
      </div> -->
  </div>
    <div class="portadasEstrenos">

        <div class="col-12 col-md-12 col-lg-12 contenedorEstrenos">
          <div class="row">
            <?php foreach ($estrenos as $juego): ?>
              <div class="contenedorImg col-6 col-md-4 col-lg-2  contPortadas">
                  <img class=portrait src='proyecto/Proyecto/TpFinal/images/<?php echo $juego["imagen"] ?>' alt="">
                  <p id=nombreJuego2><?php echo $juego["title"] ?></p>
                  <p id="JuegosCat">Juegos <?php echo $juego["plataforma"] ?></p>
                  <h4>$2560,<span style="font-size:15px;">90</span></h4>



              </div>
            <?php endforeach; ?>
          </div>

      </div>
      <!-- <div class="row col-12 col-md-6 col-lg-4 contenedorDestacados"> -->
      <?php /* foreach ($destacados as $juego)
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
    */  ?>
    <!-- </div> -->
    </div>
    <div class="container-fluid">



      <div class="container-fluid">
        <div class="row">
          <div class="col-12 separador">

          </div>
        </div>

      </div>
      <div class="row containerGralJuegos">

        <div class="col-2 cat">
            <ul> <h4>Plataformas</h4>

              <li class="categoria">PC</li>
              <li class="categoria">PlayStation3</li>
              <li class="categoria">PlayStation 4</li>
              <li class="categoria">Xbox One</li>
            </ul>
            <div class="col-12 cat">
                <ul> <h4>Categorias</h4>
                  <li class="categoria">Accíon</li>
                  <li class="categoria">Anime</li>
                  <li class="categoria">Arcade</li>
                  <li class="categoria">Aventura</li>
                  <li class="categoria">Baile</li>
                  <li class="categoria">Carreras</li>
                  <li class="categoria">Deportes</li>
                  <li class="categoria">Estrategia</li>
                  <li class="categoria">Horror</li>
                  <li class="categoria">Infantil</li>
                  <li class="categoria">Rol</li>
                  <li class="categoria">Lucha</li>
                  <li class="categoria">Shooter</li>
                  <li class="categoria">Terror</li>
                </ul>
            </div>
        </div>

        <div class="col-12 col-lg-10 contenedorJuegos">
          <div class="row">
            <?php foreach ($juegos as $juego): ?>
              <div class=" contenedorImg col-6 col-md-4 col-lg-2 contPortadasIndex">
                  <img class=portrait src='proyecto/Proyecto/TpFinal/images/<?php echo $juego["imagen"] ?>' alt="">
                  <p id=nombreJuego><?php echo $juego["title"] ?></p>
                  <p id="JuegosCat">Juegos <?php echo $juego["plataforma"] ?></p>
                  <div class="row precioCarro">
                      <div class="col-12 precioIndex">
                        <h4>$2560,<span style="font-size:15px;">90</span></h4>
                  </div>
                  <div class="col-12 enviarCarrito">
                      <button class="" type="button" name="EnviarCarrito">Añadir al carrito</button>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

      </div>

    </div>

@endsection
