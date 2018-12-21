@extends ('default')
@section('section')

  <title>Sube tu juego!</title>
  </head>
        @auth
            <?php if (Auth::user()->email !='admin@admin.com'){
                return redirect('/subirJuego');
            }
            ?>

        @endauth
    <div class="registrate">
      <h2>Sube tu juego!</h2>
    </div>
    <div class=" col-12">
      <div class="contenedor-fluid" id="contenedorForm">
        <form class="login" action="subirJuego" method="post" enctype="multipart/form-data" name="register" onsubmit="return validarJuego()">
          @csrf
          <span>
                <strong id="errorForm"style="color:red"></strong><br>
            </span>
          <input id="name" class="input"  type="text" name="name" value="{{ old('name') }}" placeholder="Titulo" onblur="revisar(this); revisarLongitud(this,2)" onkeyup="revisar(this)" ><br>
          <div>
          @if ($errors->has('name'))
              <span>
                  <strong style="color:red">{{ $errors->first('name') }}</strong>
              </span>
          @endif
        </div>

          <input id="price" class="input"  type="number" name="price" value="{{ old('price') }}" placeholder="Precio" onblur="revisar(this);revisaNum(this)"onkeyup="revisar(this);revisaNum(this)" ><br>
          <div>
          @if ($errors->has('price'))
              <span>
                  <strong style="color:red">{{ $errors->first('price') }}</strong>
              </span>
          @endif
        </div>
          <input id="stock" class="input"  type="number" name="stock" value="{{ old('stock') }}" placeholder="Stock" onblur="revisar(this);revisaNum(this)"onkeyup="revisar(this);revisaNum(this)" ><br>
          <div>
          @if ($errors->has('stock'))
              <span>
                  <strong style="color:red">{{ $errors->first('stock') }}</strong>
              </span>
          @endif
        </div>
          <input id="release_date" class="input"style="min-width:292px" type="date" name="release_date" value="{{ old('release_date') }}" onblur="revisar(this); revisaFecha(this)" ><br>
          <div>
          @if ($errors->has('release_date'))
              <span>
                  <strong style="color:red">{{ $errors->first('release_date') }}</strong>
              </span>
          @endif
        </div>
          <label for="">Portada<br><br><input  type="file" name="image" value=""></label>
          <br><br>
          <div>
          @if ($errors->has('image'))
              <span>
                  <strong style="color:red">{{ $errors->first('image') }}</strong>
              </span>
          @endif
        </div>
          
            
            <select id="platform" class="input" style="max-width:295px"name="platform" onblur="revisar(this)">
              <option value="">Seleccione su plataforma</option>
              <option value="PC">PC</option>
              <option value="Playstation 4">Playstation 4</option>
              <option value="XBox One">XBox One</option>
              <option value="Wii">Wii</option>
            </select>
            <div>
            @if ($errors->has('platform'))
                <span>
                    <strong style="color:red">{{ $errors->first('platform') }}</strong>
                </span>
            @endif
          </div>
          

          <div class="">
            
            <select id="genre"class="input" name="genre" onblur="revisar(this)">
              <option value="">Seleccione un genero</option>
              <option value="Accion">Accion</option>
              <option value="Aventura">Aventura</option>
              <option value="Pelea">Pelea</option>
              <option value="Tiritos">Tiritos</option>
            </select>
            <div>
            @if ($errors->has('genre'))
                <span>
                    <strong style="color:red">{{ $errors->first('genre') }}</strong>
                </span>
            @endif
          </div>
          </div>

          <br><br><input type="submit" name="" value="Subir juego!" class="enviar">
        </form>
      </div>
    </div>
    <br><br>
@endsection
