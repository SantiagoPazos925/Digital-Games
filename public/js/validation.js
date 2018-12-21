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
  function validar(){

    
    var min = 5;
    var fullname = document.getElementById("fullname");
    var nick = document.getElementById("nick");
    var email = document.getElementById("email");
    var datosCorrectos = true;
    let soloLetras = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/g;
    var emailCorrecto = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (fullname.value == "" || fullname.length < min || !soloLetras.test(fullname.value) ) {
        datosCorrectos = false;
    }
    if (nick.value == "" || nick.value.length < min)  {
        datosCorrectos = false;
    }
    
    if (email.value !== ''){
      if(!emailCorrecto.test(email.value)){
        datosCorrectos = false;
      }
       
    }

    if (!datosCorrectos) {
      alert('Hay Errores En El Formulario');
    }
    return datosCorrectos;
  }
  function validarJuego(){
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
    }
    if (stock.value == "" || isNaN(stock))  {
      datosCorrectos = false;
    }
    if(price.value == "" || isNaN(price)){
      datosCorrectos = false;
    }
    if (release_date.value == "" || revisaFecha(release_date)) {
      datosCorrectos = false;
    }
    if (genre.value == "" ) {
      datosCorrectos = false;
    }
    if (platform.value =="") {
      datosCorrectos = false;
    }
    
    if (!datosCorrectos) {
      alert('Hay Errores En El Formulario');
    }
    return datosCorrectos;
  }