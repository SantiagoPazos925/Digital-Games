<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="proyecto/Proyecto/TpFinal/css/normalize.css">
    <link rel="stylesheet" href="proyecto/Proyecto/TpFinal/css/styles.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="eliantoFont/stylesheet.css" type="text/css" charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<div class="container-fluid header ">


<div class="row navBar">
  <div class="col-4  logo">
    <h2><a style="text-decoration:none" href="index.php"><span style='color:rgb(203, 51, 42);'>Digital</span><span style="color:white;">games</span></h2></a>
  </div>
  <div class="col-6  iconos">

    <i class="ion-android-cart"></i>
    <i class="ion-navicon-round"></i>
  </div>
  <div class="col-6   categorias">
      <?php
 /*        $categoria = [
          ["cate"=>"Home","url"=>"index.php", "col"=>"  col-2"],
          ["cate"=>"Preguntas Frecuentes","url"=>"faq.php", "col"=>"col-4"],
          ["cate"=>"Registro","url"=>"registro.php", "col"=>"col-2"],
          ["cate"=>"Login","url"=>"login.php", "col"=>"col-2"],
          ["cate"=>$arrayUsuario["nick"],"url"=>"miPerfil.php", "col"=>"col-2"]

        ];
       */?>
      <ul class="row  navigation" style="text-align: center;">
        <?php  /*foreach ($categoria as $cat){
          if (isset($arrayUsuario["nick"])){
            if ($cat["cate"] == "Registro" || $cat["cate"] == "Login") {

          }else {
              echo '<div id="navText" class="'.$cat["col"].'"><a id="navText" href="'.$cat["url"].'"><li >'.$cat["cate"].'</li></a></div>';
          }

        }elseif (isset($cat["cate"])) {
            echo '<div id="navText" class="'.$cat["col"].'"><a id="navText" href="'.$cat["url"].'"><li >'.$cat["cate"].'</li></a></div>';
        }



        }
        */?>




          <div class="col-2 col-lg-2 carrito">

          <i class="ion-android-cart"></i>

        </div>
      </ul>
  </div>
  </div>
  <div id="search" class="container">
    <div class="row buscador">
      <div  class="col-10 searching ">

        <input type="search" name="" value="" placeholder="Busca tu juego aqui">
      </div>
      <div class="col-2 iconSearch">
        <i class="ion-search"></i>
      </div>
    </div>


    </div>
  </div>

@yield('section')


  <div class="container-fluid footer">
    <div class="row col-12 foot">
      <div class="col-12 col-md-4 col-lg-4">
        <h5>Acerca de nosotros</h5>
        <h6><a href="#">¿Quiénes somos?</a> </h6>
        <h6><a href="#">¿Dónde estamos?</a>  </h6>
        <h6><a href="#">Contáctanos</a>  </h6>
      </div>
      <div class="col-12 col-md-4 col-lg-4">
        <h5>Condiciones de servicio</h5>
        <h6><a href="#">Condiciones de envío</a></h6>
        <h6><a href="#">Condiciones de devolucion</a></h6>
        <h6><a href="#">Garantías</a></h6>
      </div>
      <div class="col-12 col-md-4 col-lg-4">
        <h5>Políticas de privacidad </h5>
        <h6><a href="#">Política de privacidad</a> </h6>
        <h6><a href="#">Aviso Legal</a> </h6>
        <h6><a href="#">Condiciones generales de uso</a> </h6>
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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
