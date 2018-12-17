@extends('default')

@section('section')

     
<div class="col-sm-12 ">
    <h1><span style="color:rgb(203, 51, 42)">Preguntas</span> Frecuentes</h1>
  </div>
      <div class="row d-flex back " >
          
        <div class="col-lg-6 offset-lg-3" style="">
        <div class="col-sm-12  justify-content-center lul">
                  <div class="card">
            <div class="card-header" id="heading">
              <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <div class="col-12 pregunta">
                    <p>Que medios de pago aceptan?<p>
                  </div>

                </button>
              </h5>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                Aceptamos todas las tarjetas de credito disponibles.
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 justify-content-center lul">
          <div class="card">
    <div class="card-header" id="heading">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <div class="col-12 pregunta">
            <p>Tienen pensado expandir su comercio hacia nuevas consolas y productos?</p>
          </div>
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        Lo hemos pensado, todo depende del recibimiento y opiniones del publico y el crecimiento de nuetro negocio, pero no se descarta.
      </div>
    </div>
  </div>
        </div>


        <div class="col-sm-12 justify-content-center lul">
          <div class="card">
    <div class="card-header" id="heading">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
          <div class="col-12 pregunta">
            <p>Que metodos de envio aceptan?</p>
          </div>
        </button>
      </h5>
    </div>

    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <table class="table">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Metodo de envio</th>
                <th scope="col">Tiempo de envio</th>
                <th scope="col">Maximo peso</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row"></th>
                <td>DHL</td>
                <td>2-3 Dias</td>
                <td>Hasta 20kg</td>
              </tr>
              <tr>
                <th scope="row"></th>
                <td>Fedex prioridad internacional</td>
                <td>2-3 Dias</td>
                <td>Hasta 20kg</td>
              </tr>
              <tr>
                <th scope="row"></th>
                <td>FedEx Internacional Economico</td>
                <td>3-6 Dias</td>
                <td>Hasta 20kg</td>
              </tr>
              <tr>
                <th scope="row"></th>
                <td>EMS</td>
                <td>3-6 Dias</td>
                <td>Hasta 20kg</td>
              </tr>
              <tr>
                <th scope="row"></th>
                <td>Correo aereo registrado</td>
                <td>5-12 Dias</td>
                <td>Hasta 2kg</td>
              </tr>
              <tr>
                <th scope="row"></th>
                <td>Paquete pequeño registrado</td>
                <td>2-6 semanas</td>
                <td>Hasta 2kg</td>
              </tr>
            </tbody>
          </table>
      </div>
    </div>
        </div>

        </div>
        <div class="col-sm-12 justify-content-center lul">
          <div class="card">
    <div class="card-header" id="heading">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
          <div class="col-12 pregunta">
            <p>Habra un sistema de descuento para los que compren habitualmente?</p>
          </div>
        </button>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        Tenemos ya pensado un sistema de descuento por puntos a aquellos que compren habitualmente, ademas de descuento a compras mayores a los 80usd.
    </div>
  </div>
        </div>
          </div>
        <div class="col-sm-12 justify-content-center lul">
          <div class="card">
    <div class="card-header" id="heading">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
          <div class="col-12 pregunta">
            <p>Que debo hacer en caso de que el producto recibido no funcione adecuadamente?</p>
          </div>
        </button>
      </h5>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
        En caso de que esto ocurra en la primera semana de prueba del producto, hacer un reenvio y luego de constatar que el producto no funciona se enviara uno nuevo.
      </div>
    </div>
  </div>
        </div>
        <div class="col-sm-12 justify-content-center lul">
          <div class="card">
    <div class="card-header" id="heading">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseTwo">
          <div class="col-12 pregunta">
            <p>Seria genial ver una plantilla de requerimientos a la hora de comprar un juego para PC, veremos esto en un futuro?</p>
          </div>
        </button>
      </h5>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
        Es una propuesta muy interesante, y una de las mas pedidas por los usuarios, estaremos implemententandolo proximamente.
      </div>
    </div>
  </div>
        </div>
      </div>
      </div>
@endsection
