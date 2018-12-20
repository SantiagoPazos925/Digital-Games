@extends('default')

@section('section')
<div class="container-fluid perfilInfo">
  <div class="col-12 textoBienvenida tituloEstreno" >
      <h2>Bienvenido <span style="color:rgb(203, 51, 42);">{{ Auth::user()->fullname }}</span></h2>
  </div>
  <div class="row  ">
<?php $user = Auth::user() ?>
        <div class=" col-12 col-lg-6 contenedorImagenPerfil">
          <div class="col-12">
            <img src="

            <?php


              if ($user->image == '/proyecto/Proyecto/TpFinal/images/profile.png') {
                echo '/proyecto/Proyecto/TpFinal/images/profile.png';
              } else {
                echo '/storage/avatars/'. $user->nick .'';
              }


             ?>



            " class="img-fluid avatar" alt="Responsive image" class="text-center" id="avatar">
      </div>
            <div class="col-12 imagenApodo">
              <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button id="cerrarSesion" type="submit" name="logout">Cerrar Sesion</button>
                </form>
            </div>
            <div class="col-12 imagenApodo">
                <button><a href="editarPerfil">Editar perfil</a></button>
            </div>

        </div>
        <div class="col-12 col-lg-6 ">
              <form class="" action="miPerfil.php" method="post">
                <div class="row col-12  infoUsuario">
                  <div class="col-12 info">
                    <span ><h3 >Nombre Completo: {{ Auth::user()->fullname }} </h3>

                   </span>
                  </div>
                  <div class="col-12 info">
                    <span ><h3 >Apodo: {{ Auth::user()->nick }} </h3> </span><br>
                  </div>
                  <div class="col-12 info">
                    <span ><h3 >Email: {{ Auth::user()->email }} </h3> </span><br>
                  </div>
                  <div class="col-12 info">
                    <span ><h3 >Plataforma: {{ Auth::user()->platform }}</h3> </span><br>
                  </div>
                  <div class="col-12 info">
                    <span ><h3 >Pais: {{ Auth::user()->country }} </h3> </span><br>
                  </div>


                </div>
              </form>




        </div>

  </div>

</div>
@endsection
