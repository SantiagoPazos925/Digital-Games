@extends ('default')

@section('section')
<?php /* require_once("classes/autoload.php"); */?>

  <?php/*
  include("header.php");
  require_once("classes/autoload.php");
  $errorDatos = '';
  $errorUsuario = '';
  $errorPassword = '';
if($_POST){
  $errores = $validador->validarLogin($_POST, $bd);
  if(count($errores) == 0)
    $auth->logear($_POST["nick"]);

  }
*/
  ?>
  <div class="registrate">
    <h2>Inicia sesion en <span style="color:rgb(203, 51, 42);">Digital</span>Games</h2>
  </div>

  <div class="contenedorForm col-10 offset-1">

    <div class="contenedor ">
      <form class="login" action="login.php" method="post" enctype="multipart/form-data" >
        <span class="error"><?php /* echo($errorDatos); */ ?></span> <br>
        <label for="">Usuario: <span class="error"><?php /* $errores['usuario']??''*/ ?></span> <br><input type="text" name="nick" value=""></label>
        <br><br>
        <label for="">Contraseña: <span class="error" ><?php // $errores['password']??'' ?></span><br><input type="password" name="password" value=""></label>
        <br><br><input type="submit" name="" value="Ingresar" class="btn btn-primary">
      </form>

    </div>
ADASDASD
@endsection
