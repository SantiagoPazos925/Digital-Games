@extends('default')

@section('section')
<div class="container-fluid perfilInfo">
  <div class="col-12 textoBienvenida tituloEstreno" >
      <h2>Bienvenido <span style="color:rgb(203, 51, 42);">{{ Auth::user()->fullname }}</span></h2>
  </div>
  <div style="margin-bottom:70px;margin-top:70px;">
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
        <div class="row mb-5">
            <div class="col-6 imagenApodo">
              <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="enviar2" id="cerrarSesion" type="submit" name="logout">Cerrar Sesion</button>
                </form>
            </div>
            <div class="col-6 imagenApodo">
                <button class="enviar2" ><a  style="color:white" href="editarPerfil">Editar perfil</a></button>
            </div>
          </div>
          
        </div>
        <div class="col-12 col-lg-6 ">
              <form class="" action="miPerfil.php" method="post">
                <div class="row col-12  infoUsuario">
                  <div class="col-12 info">
                    <span ><h6 >Nombre Completo: {{ Auth::user()->fullname }} </h6><br>

                   </span>
                  </div>
                  <div class="col-12 info">
                    <span ><h6 >Apodo: {{ Auth::user()->nick }} </h6> </span><br>
                  </div>
                  <div class="col-12 info">
                    <span ><h6 >Email: {{ Auth::user()->email }} </h6> </span><br>
                  </div>
                  <div class="col-12 info">
                    <span ><h6 >Plataforma: {{ Auth::user()->platform }}</h6> </span><br>
                  </div>
                  <div class="col-12 info">
                    <span ><h6 >Pais: {{ Auth::user()->country }} </h6> </span><br>
                  </div>


                </div>
              </form>




        </div>

  </div>
</div>
</div>
@endsection
