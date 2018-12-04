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

// function validateRegistro(){
//
//
//   var fullname = document.forms["registro"]["nombreCompleto"].value;
//   var inputFullname = document.forms["registro"]["nombreCompleto"];
//   var errorFullname = document.querySelector(".errorNC");
//   var nick = document.forms["registro"]["nick"].value;
//
//   var email = document.forms["registro"]["email"].value;
//   var pais = document.forms["registro"]["pais"].value;
//   var pass = document.forms["registro"]["password"].value;
//   var pass2 = document.forms["registro"]["password1"].value;
//   var plat = document.forms["registro"]["plataforma"].value;
//
//   if (fullname == "") {
//
//       event.preventDefault();
//       inputFullname.style.borderColor = "red";
//       errorFullname.innerHTML = "Inserte su nombre completo";
//       errorFullname.style.color = "Red";
//   }
//   if (nick == "") {
//
//       event.preventDefault();
//       inputFullname.style.borderColor = "red";
//       errorFullname.innerHTML = "Inserte su nombre completo";
//       errorFullname.style.color = "Red";
//   }
//
//
// }
// function compruebaCampo(){
//     var element = document.activeElement;
//     var elementValue = document.activeElement.value;
//     if (element == null || element =="") {
//       var elementInput = element.getElementsByClassName("input");
//       element.Input.style.borderColor = "red";
//     }else {
//
//     }
// }
function revisar(elemento){

  if (elemento.value == '')
  {
      elemento.className = 'error';
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
        elemento.className='error';
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
        elemento.className='error';
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
        elemento.className='error';
      }else {
        elemento.className='input';
      }
    }
  }
  function validar(){

    var datosCorrectos = true;
    var error = "";
    if (document.getElementById("nombreCompleto").value =="") {

        datosCorrectos = false;
        error = "\n El Nombre Esta Vacio";
    }
    if (document.getElementById("nick").value =="") {
        datosCorrectos = false;
        error = "\n El Nick Esta Vacio";
    }

    var exp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!exp.test(document.getElementById("email").value)) {
        datosCorrectos = false;
        error = "\n El Email es Inválido";
    }

    if (!datosCorrectos) {
      alert('Hay Errores En El Formulario' +error);
    }
    return datosCorrectos;
  }
