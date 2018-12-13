@extends ('default')
@section('section')
    <title>Registrarme</title>
  </head>
    <div class="registrate">
      <h2>Se parte de la comunidad <span style="color:rgb(203, 51, 42);">Digital</span>Games!</h2>
    </div>
    <div class=" col-10 offset-1">
      <div class="contenedor-fluid" id="contenedorForm">
        <form class="login" action="register" method="post" enctype="multipart/form-data" name="register">
          @csrf
          <input id="nombreCompleto" class="input"  type="text" name="fullname" value="{{ old('fullname') }}" placeholder="Nombre" onblur="revisar(this); revisarLongitud(this, 5); revisarSoloLetras(this)" onkeyup="revisar(this); revisarLongitud(this, 5); revisarSoloLetras(this)"><br>
          @if ($errors->has('fullname'))
              <span>
                  <strong>{{ $errors->first('fullname') }}</strong>
              </span>
          @endif
          <input  id="nick"class="input" type="text" name="nick" value="{{ old('nick') }}" placeholder="Nick" onblur="revisar(this)" onkeyup="revisar(this)"><br>
          @if ($errors->has('nick'))
              <span>
                  <strong>{{ $errors->first('nick') }}</strong>
              </span>
          @endif
          <input id="email"class="input" type="email" name="email" value="{{ old('email') }}" placeholder="Email" onblur="revisar(this) ; revisaEmail(this)" onkeyup="revisar(this) ; revisaEmail(this)"><br>
          @if ($errors->has('email'))
              <span>
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
          <div class="userData">
              <div class="inputUserData">
              <select class="input" name="country" id="paises" value="{{ old('country') }}">
              </select>
              <div class="" id="provincias">
              </div>
              <script type="text/javascript">
                  fetch('https://restcountries.eu/rest/v2/all')
                  .then(function(data){
                    return data.json();
                  })
                  .then(function(r){
                    var paises = document.getElementById("paises");
                    for (pais of r) {
                        var cod = '<option value="' + pais.name + '">' + pais.name + '</option>';
                        paises.innerHTML += cod;
                      }
                  })
                  .catch(function(r){
                    console.log('hubo un error');
                  })
                  var paises = document.getElementById("paises");
                  paises.onchange = function(ev){
                    if(this.value == 'Argentina'){
                      fetch('https://dev.digitalhouse.com/api/getProvincias')
                      .then(function(data){
                        return data.json();
                      })
                      .then(function(r){
                        var provincias = document.getElementById("provincias");
                        var select = document.createElement('select');
                        select.name = 'province';
                        for (provincia of r) {
                            var cod = '<option value="' + provincia.state + '">' + provincia.state + '</option>';
                            select.innerHTML += cod;
                          }
                          select.className = "input";
                        provincias.append(select);
                      })
                      .catch(function(r){
                        console.log('hubo un error');
                      })
                    }
                    else
                    {
                      var provincias = document.getElementById("provincias");
                      provincias.innerHTML = '';
                    }
                    }
              </script>
                <span style="color:red;">*</span>
              </div>
          </div>
          <label for="">Avatar<br><br><input  type="file" name="image" value=""></label>
          <br><br>

          <input  id="password" class="input" type="password" name="password" value=""placeholder="Contraseña"onblur="revisar(this)" onkeyup="revisar(this)"></label><br>
          @if ($errors->has('password'))
              <span>
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
          <input  id="password2" class="input" type="password" name="password_confirmation" value=""placeholder="Repita su contraseña"onblur="revisar(this)" onkeyup="revisar(this)"></label><br>
          <select id="plataforma" class="input" name="plataform" value = "{{ old('plataform') }}">
            <option value="">Seleccione plataforma</option>
            <option value="ps4">PlayStation 4</option>
            <option value="xbox">Xbox One</option>
            <option value="pc">PC</option>
          </select>
          <br><br><input type="submit" name="" value="Registarme" class="enviar">
        </form>
      </div>
    </div>
    <br><br>
@endsection
