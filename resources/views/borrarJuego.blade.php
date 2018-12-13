@extends ('default')
@section('section')
  <title>Borra tu juego!</title>
  </head>
    <div class="registrate">
      <h2>Borra tu juego!</h2>
    </div>
    <div class=" col-10 offset-1">
      <div class="contenedor-fluid" id="contenedorForm">
        <form class="login" action="borrarJuego" method="post" enctype="multipart/form-data" name="register">
          @csrf
          <label for="">ID del juego:</label>
          <input type="number" name="id" value="">
          <br><br><input type="submit" name="" value="Subir juego!" class="enviar">
        </form>
      </div>
    </div>
    <br><br>
@endsection
