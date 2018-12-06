@extends ('default')

@section('section')

<?php
  $userCountry = "";
$paises=[
  "Seleccione un pais", "Afghanistan", "Albania", "Argelia", "Alemania", "American Samoa", "Andorra", "Angola", "Anguilla", "Antartida", "Antigua y Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia-Herzegovina", "Botswana", "Bouvet Island", "Brasil", "Brit Ind Ocean Territory", "Brunei Darussalm", "Bulgaria", "Burkina Faso", "Burma", "Burundi", "Cambodia", "Cameroon", "Canada", "Canary Islands", "Cape Verde", "Caymen Islands", "Central African Rep", "Chad", "Chile", "China", "Christmas Islands", "Cocos Islands", "Colombia", "Comoros", "Congo", "Cook Islands", "Costa Rica", "Croatia", "Cuba", "Chipre", "Dem Rep. of Korea", "Dinamarca", "Djibouti", "Dominica", "East Timor", "Ecuador", "Egipto", "El Salvador", "Eritrea", "España", "Estados Unidos de America", "Estonia", "Etiopia", "Faroe Islands", "Fiji", "Finland", "Francia", "Guiana Francesa", "Polynesia Francesa", "French So. Territories", "Gabon", "Gambia", "Georgia", "Ghana", "Gibraltar", "Guinea Equatorial", "Grecia", "Greenland", "Grenada", "Guadalupe", "Guatemala", "Guinea", "Guinea Bissau", "Guyana", "Haiti", "Heard, McDonald Island", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Inglaterra", "Iran", "Iraq", "Ireland", "Islas Filipinas", "Israel", "Italia", "Ivory Coast", "Jamaica", "Japon", "Jordan", "Kazakhistan", "Kenia", "Kiribati", "Korea del Norte", "Kuwait", "Kyrqyzstan", "Laos", "Lativa", "Libano", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Madagascar", "Malawi", "Malaysia", "Maldivas", "Mali", "Malta", "Malvinas Argentinas", "Mariana Islands", "Marruecos", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montserrat", "Mozambique", "Myanmar", "Nambia", "Nauru", "Nepal", "Netherland Antilles", "Netherlands", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue Island", "Norfolk Island", "Northern Mariana Island", "Norway", "OCE", "Oman", "Pacific Islands", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reino Unido", "Republica de Corea", "Republica Dominicana", "Reunion", "Romania", "Russian Federation", "Rwanda", "South Georgia Sandwich", "Saint Pierre Miguelon", "Samoa", "San Marino", "Sao Tomee and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierre Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somali Republic", "South Africa", "South Korea", "Sri Lanka", "St. Helena", "St. Kits-Nevis", "St. Lucia", "St. Vincent/Grenadines", "Sudan", "Suriname", "Svalbard Jan Mayen", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tokeelau", "Tonga", "Trinidad Tobago", "Tunisia", "Turquia", "Turkmenistan", "Turks Caicos Islands", "Tuvalu", "Uganda", "Ukrania", "United Arab Emirates", "Uruguay", "US Minor Outlying Is.", "Uzbekistan", "Vanuatu", "Vatican City State", "Venezuela", "Vietnam", "Virgin Islands: British", "Virgin Islands: US", "Wallis Futuna Islands", "Western Sahara", "Western Samoa", "Yemen", "Yugoslavia", "Zaire", "Zambia", "Zimbabwe"
];   ?>

    <title>Registrarme</title>
  </head>
    <?php
 /*     include("header.php");
    require_once("classes/autoload.php");

      if ($_POST) {
      $errores =  $validador->validarRegistro($_POST, $bd , $_FILES );
      if(count($errores)==0){
        $usuario = new Usuario( $_POST['nombreCompleto'], $_POST['nick'], $_POST['email'], $_POST['password'], $_POST['pais'], $_POST['plataforma'],$_FILES);
        $bd->guardarUsuario($usuario);

        header('location: miPerfil.php?nick='.$_POST['nick'].'');

      }
    }
 */
?>

    <div class="registrate">
      <h2>Se parte de la comunidad <span style="color:rgb(203, 51, 42);">Digital</span>Games!</h2>
    </div>

    <div class=" col-10 offset-1">

      <div class="contenedor-fluid" id="contenedorForm">
        <form class="login" action="registro" method="post" enctype="multipart/form-data" name="registro" onsubmit="return validar()">
          <input id="nombreCompleto" class="input"  type="text" name="nombreCompleto" value="" placeholder="Nombre" onblur="revisar(this); revisarLongitud(this, 5); revisarSoloLetras(this)" onkeyup="revisar(this); revisarLongitud(this, 5); revisarSoloLetras(this)"><br>
          <input  id="nick"class="input" type="text" name="nick" value="" placeholder="Nick" onblur="revisar(this)" onkeyup="revisar(this)"><br>
          <input id="email"class="input" type="email" name="email" value="" placeholder="Email" onblur="revisar(this) ; revisaEmail(this)" onkeyup="revisar(this) ; revisaEmail(this)"><br>
          <div class="userData">
              <div class="inputUserData">
              <select class="input" name="pais" id="paises">
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

                  // if(1){
                  //
                  //   fetch('https://dev.digitalhouse.com/api/getProvincias')
                  //   .then(function(data){
                  //     return data.json();
                  //   })
                  //   .then(function(r){
                  //     var provincias = document.createElement('select');
                  //     for (provincia of r) {
                  //         var cod = '<option value="' + provincia.name + '">' + provincia.name + '</option>';
                  //
                  //         provincias.innerHTML += cod;
                  //       }
                  //   })
                  //   .catch(function(r){
                  //     console.log('hubo un error');
                  //   })
                  // }
              </script>

                <span style="color:red;">*</span>
              </div>
          </div>
          <label for="">Avatar<br><br><input  type="file" name="avatar" value=""></label>
          <br><br>
          <input  id="password" class="input" type="password" name="password" value=""placeholder="Contraseña"onblur="revisar(this)" onkeyup="revisar(this)"></label><br>
          <input  id="password2" class="input" type="password" name="password1" value=""placeholder="Repita su contraseña"onblur="revisar(this)" onkeyup="revisar(this)"></label><br>


          <select id="plataforma" class="input" name="plataforma" value = "">

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
