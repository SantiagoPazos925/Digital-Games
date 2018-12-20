@extends ('default')
@section('section')
    <title>Editar perfil</title>
  </head>
    <div class="registrate">
      <h2>Actualizar perfil</h2>
    </div>
    <div class="col-12 col-md-10 offset-md-1 ">
      <div class="contenedor-fluid py-5" id="contenedorForm">
        <form class="login" action="" method="post" enctype="multipart/form-data" name="" onsubmit="">
          @csrf
          <input id="fullname" class=" input"  type="text" name="fullname" value="{{ old('fullname', Auth::user()->fullname) }}" placeholder="Nombre Completo" {{--onblur="revisar(this); revisarLongitud(this, 5); revisarSoloLetras(this)" onkeyup="revisar(this); revisarLongitud(this, 5); revisarSoloLetras(this)"--}}><br>
          <div>
          @if ($errors->has('fullname'))
              <span>
                  <strong>{{ $errors->first('fullname') }}</strong>
              </span>
          @endif
        </div>
          <input  id="nick"class=" input" type="text" name="nick" value="{{ old('nick', Auth::user()->nick) }}" placeholder="Nick" {{--onblur="revisar(this)" onkeyup="revisar(this)"--}}><br>
          <div>
          @if ($errors->has('nick'))
              <span>
                  <strong>{{ $errors->first('nick') }}</strong>
              </span>
          @endif
        </div>
          <input id="email"class=" input" type="email" name="email" value="{{ old('email', Auth::user()->email) }}" placeholder="Email" {{-- onblur="revisar(this) ; revisaEmail(this)" onkeyup="revisar(this) ; revisaEmail(this)"--}}><br>
          <div>
          @if ($errors->has('email'))
              <span>
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
        </div>
          <div class="userData ">
              <div class="inputUserData">
              <select class="col-10 col-sm-8 offet-sm-2 col-md-6 col-lg-4 col-xl-3 input" name="country" id="paises" value="{{ old('country') }}">
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
                    paises.innerHTML += '<option value="">Seleccione su país</option>';
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
          <div>
          @if ($errors->has('country'))
              <span>
                  <strong>{{ $errors->first('country') }}</strong>
              </span>
          @endif
        </div>
        <div>
        @if ($errors->has('province'))
            <span>
                <strong>{{ $errors->first('province') }}</strong>
            </span>
        @endif
      </div>
          <h3 style="color:white">Sube tu <span style="color:rgb(203, 51, 42);">Avatar</span></h3><br>
          <input  type="file" name="image" value=""></label>
          <br><br>
          <div>
          @if ($errors->has('image'))
              <span>
                  <strong>{{ $errors->first('image') }}</strong>
              </span>
          @endif
        </div>
          <input  id="password" class="input" type="password" name="password" value=""placeholder="Contraseña" {{--onblur="revisar(this)" onkeyup="revisar(this)"--}}></label><br>
          <div>
          @if ($errors->has('password'))
              <span>
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
        </div>
          <input  id="password2" class="input" type="password" name="password_confirmation" value=""placeholder="Repita su contraseña" {{--onblur="revisar(this)" onkeyup="revisar(this)"--}}></label><br>
           <select id="plataforma" class="input " name="platform" value = "{{ old('platform') }}">
            <option value="">Seleccione plataforma</option>
            <option
            @if (Auth::user()->platform == 'ps4')
              {{ 'selected' }}
            @endif value="ps4">PlayStation 4</option>
            <option
            @if (Auth::user()->platform == 'xbox')
              {{ 'selected' }}
            @endif value="xbox">Xbox One</option>
            <option
            @if (Auth::user()->platform == 'pc')
              {{ 'selected' }}
            @endif value="pc">PC</option>
          </select>
          <div>
          @if ($errors->has('platform'))
              <span>
                  <strong>{{ $errors->first('platform') }}</strong>
              </span>
          @endif
        </div>
          
            <div class="col-12 col-md-6 offset-md-3">
                <div class="row">
                <div class="col-6">
                    <button ><a style="font-size:25px"href="profile" class="">Volver</a></button>
                </div>
                <div class="col-6 ">
                    <button type="submit" style="font-size:25px"name="" value="" class=" ">Guardar</button>
                  </div>
            </div>
           
          </div>
           
        </form>
      </div>

    </div>
    <br><br>
@endsection
