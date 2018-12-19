@extends ('default')
@section('section')
    <title>Registrarme</title>
  </head>
    <div class="registrate">
      <h2>Se parte de la comunidad <span style="color:rgb(203, 51, 42);">Digital</span>Games!</h2>
    </div>
    <div class="col-12 col-md-10 offset-md-1 ">
      <div class="contenedor-fluid py-5" id="contenedorForm">
        <form class="login" action="register" method="post" enctype="multipart/form-data" name="register" onsubmit="">
          @csrf
          <input id="fullname" class=" input"  type="text" name="fullname" value="{{ old('fullname') }}" placeholder="Nombre Completo" {{--onblur="revisar(this); revisarLongitud(this, 5); revisarSoloLetras(this)" onkeyup="revisar(this); revisarLongitud(this, 5); revisarSoloLetras(this)"--}}><br>
          
          <input  id="nick"class=" input" type="text" name="nick" value="{{ old('nick') }}" placeholder="Nick" {{--onblur="revisar(this)" onkeyup="revisar(this)"--}}><br>
          
          <input id="email"class=" input" type="email" name="email" value="{{ old('email') }}" placeholder="Email" {{-- onblur="revisar(this) ; revisaEmail(this)" onkeyup="revisar(this) ; revisaEmail(this)"--}}><br>
         
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
          <h3 style="color:white">Sube tu <span style="color:rgb(203, 51, 42);">Avatar</span></h3><br>
          <input  type="file" name="image" value=""></label>
          <br><br>

          <input  id="password" class="input" type="password" name="password" value=""placeholder="Contraseña" {{--onblur="revisar(this)" onkeyup="revisar(this)"--}}></label><br>
        
          <input  id="password2" class="input" type="password" name="password_confirmation" value=""placeholder="Repita su contraseña" {{--onblur="revisar(this)" onkeyup="revisar(this)"--}}></label><br>
           <select id="plataforma" class="input " name="plataform" value = "{{ old('plataform') }}">
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
