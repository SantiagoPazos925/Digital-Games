function validateLogin(){
  var nick = document.forms["myForm"]["nick"].value;
  var pass = document.forms["myForm"]["password"].value;
  var inputNick = document.forms["myForm"]["nick"];
  var inputPassword = document.forms["myForm"]["password"];
  var errorNick = document.querySelector(".error");
  var errorPass = document.querySelector(".error2");
  if (nick == "") {

      event.preventDefault();
      inputNick.style.borderColor = "red";
      errorNick.innerHTML = "Inserte Nick";
  }
  if (pass == "") {

      event.preventDefault();
      inputPassword.style.borderColor = "red";
      errorPass.innerHTML = "Inserte Password";
  }
}

function revisar(elemento){


  if (elemento.value == '')
  {
      elemento.className = "inputError";

  }
  else
  {
    elemento.className = 'input';
  }

  }



  function revisarSoloLetras(elemento){

    if (elemento.value !== '') {
      var data = elemento.value;
      let regex = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/g;
      if(!regex.test(data)){
        elemento.className='inputError';

      }else {
        elemento.className='input';

      }
    }


  }
  function revisarLongitud(elemento, min)
  {

    if (elemento.value !== ''){
      var data = elemento.value;
      if(data.length < min){
        elemento.className='inputError';

      }
      else{
        elemento.className='input';

      }
    }
  }
  function revisaEmail(elemento){
    if (elemento.value !== ''){
      var data = elemento.value;
      var exp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      if (!exp.test(data))
      {
        elemento.className='inputError';
      }else {
        elemento.className='input';
      }
    }
  }
  function revisaFecha(elemento){
    var pattern =/^([0-9]{4})\-([0-9]{2})\-([0-9]{2})$/;
    var fecha = document.getElementById('release_date');
    console.log(fecha.value);
    if (!pattern.test(fecha.value)) {
      elemento.className='inputError';
    }else {
      elemento.className='input ';
    }


  }





  function revisaPassword(elemento){
      var pass = document.getElementById('password');
      var pass2 = document.getElementById('password2');
      if(elemento.value != pass.value){
        elemento.className='inputError';
      }else {
        elemento.className='input';
      }
  }
  function revisaNum(elemento){
      var RegExp = /[0-9]/;

      if (!RegExp.test(elemento.value)) {
        elemento.className='inputError';
      }else{
        elemento.className='input';

      }
  }
  function validarUpdatePerfil(){
    var min = 5;
    let soloLetras = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/g;
    var fullname = document.getElementById("fullname");
    var nick = document.getElementById("nick");
    var country = document.getElementById("paises");
    var platform = document.getElementById("platform");
    console.log(country.value);
    var datosCorrectos = true;

    if (fullname.value == "" || fullname.length < min || !soloLetras.test(fullname.value) ) {
        datosCorrectos = false;
    }
    if (nick.value == "" || nick.value.length < min)  {
        datosCorrectos = false;
    }
    if (country.value == "")  {
      datosCorrectos = false;
    }
    if (platform.value == "")  {
      datosCorrectos = false;
    }


    if (!datosCorrectos) {
      var errorForm = document.getElementById("errorForm");
      errorForm.innerText='Hay errores en el formulario';
    }
    return datosCorrectos;
  }





  function validar(){


    var min = 5;
    var fullname = document.getElementById("fullname");
    var nick = document.getElementById("nick");
    var email = document.getElementById("email");
    var country = document.getElementById("paises");
    var platform = document.getElementById("platform");
    var password =document.getElementById("password");
    var datosCorrectos = true;
    let soloLetras = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/g;
    var emailCorrecto = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (fullname.value == "" || fullname.length < min || !soloLetras.test(fullname.value) ) {
        datosCorrectos = false;
        fullname.className = 'inputError';
    }
    if (nick.value == "" || nick.value.length < min)  {
        datosCorrectos = false;
        nick.className = 'inputError';
    }

    if (email.value == ''|| (!emailCorrecto.test(email.value))){
        datosCorrectos = false;
        email.className = 'inputError';

    }

    if (country.value == ''){
      datosCorrectos = false;
      country.className = 'inputError';

    }
    if (platform.value == ''){
      datosCorrectos = false;
      platform.className = 'inputError';

    }
    if (password.value == ''){
      datosCorrectos = false;
      password.className = 'inputError';

    }
    if (password2.value == '' || password2.value !== password.value ){
      datosCorrectos = false;
      password2.className = 'inputError';

    }





    if (!datosCorrectos) {
      var errorForm = document.getElementById("errorForm");
      errorForm.innerText='Hay errores en el formulario';
    }
    return datosCorrectos;
  }
  function validarUpdateJuego(){
      var name = document.getElementById("name");
      var datosCorrectos = true;

      if (name.value == "" || name.value.length < min ) {
        datosCorrectos = false;
        name.className = 'inputError';
      }

      if (!datosCorrectos) {
        var errorForm = document.getElementById("errorForm");
        errorForm.innerText='Hay errores en el formulario';

      }
      return datosCorrectos;

  }
  function validarJuego(){
    var regExp = /[0-9]/;
    var datosCorrectos = true;
    var min= 3;
    var name = document.getElementById("name");
    var stock = document.getElementById("stock");
    var price = document.getElementById("price");
    var release_date = document.getElementById("release_date");
    var genre = document.getElementById("genre");
    var platform = document.getElementById("platform");

    if (name.value == "" || name.value.length < min ) {
      datosCorrectos = false;
      name.className = 'inputError';
    }
    if (stock.value == "" || (!regExp.test(stock.value)))  {
      datosCorrectos = false;
      stock.className = 'inputError';
    }
    if(price.value == "" || (!regExp.test(price.value))) {
      datosCorrectos = false;
      price.className = 'inputError';
    }
    if (release_date.value == "" || revisaFecha(release_date.value)) {
      datosCorrectos = false;
      release_date.className = 'inputError';
    }
    if (genre.value == "" ) {
      datosCorrectos = false;
      genre.className = 'inputError';
    }
    if (platform.value =="") {
      datosCorrectos = false;
      platform.className = 'inputError';
    }

    if (!datosCorrectos) {
      var errorForm = document.getElementById("errorForm");
      errorForm.innerText='Hay errores en el formulario';

    }
    return datosCorrectos;
  }
