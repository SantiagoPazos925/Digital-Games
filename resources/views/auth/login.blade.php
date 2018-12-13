@extends ('default')
@section('section')
  <div class="registrate">
    <h2>Inicia sesion en <span style="color:rgb(203, 51, 42);">Digital</span>Games</h2>
  </div>
  <div class="contenedorForm col-10 offset-1">
      <form class="login" action="{{url('usuarios')}}" method="post" enctype="multipart/form-data" name="myForm" onsubmit="return validateLogin()" >
        <label for="">Usuario: <span class="error"></span> <br><input type="text" name="nick" value=""  ></label>
        <br><br>
        <label for="">Contraseña: <span class="error2" ></span><br><input type="password" name="password" value=""  ></label>
        <br><br><input type="submit" name="" value="Ingresar" class="btn btn-primary">
      </form>
  </div>
@endsection
