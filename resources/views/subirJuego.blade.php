@extends ('default')
@section('section')
  <title>Sube tu juego!</title>
  </head>
    <div class="registrate">
      <h2>Sube tu juego!</h2>
    </div>
    <div class=" col-10 offset-1">
      <div class="contenedor-fluid" id="contenedorForm">
        <form class="login" action="subirJuego" method="post" enctype="multipart/form-data" name="register">
          @csrf
          <input id="nombreCompleto" class="input"  type="text" name="name" value="{{ old('name') }}" placeholder="Titulo" ><br>
          @if ($errors->has('fullname'))
              <span>
                  <strong>{{ $errors->first('fullname') }}</strong>
              </span>
          @endif

          <input id="nombreCompleto" class="input"  type="number" name="price" value="{{ old('price') }}" placeholder="Precio" ><br>
          @if ($errors->has('price'))
              <span>
                  <strong>{{ $errors->first('price') }}</strong>
              </span>
          @endif
          <input id="nombreCompleto" class="input"  type="number" name="stock" value="{{ old('stock') }}" placeholder="Stock" ><br>
          @if ($errors->has('stock'))
              <span>
                  <strong>{{ $errors->first('stock') }}</strong>
              </span>
          @endif
          <input id="nombreCompleto" class="input"  type="date" name="release_date" value="{{ old('release_date') }}" ><br>
          @if ($errors->has('release_date'))
              <span>
                  <strong>{{ $errors->first('release_date') }}</strong>
              </span>
          @endif
          <label for="">Portada<br><br><input  type="file" name="image" value=""></label>
          <br><br>
          @if ($errors->has('image'))
              <span>
                  <strong>{{ $errors->first('image') }}</strong>
              </span>
          @endif
          <div class="">
            <label for="">Platform</label>
            <select class="" name="platform">
              <option value="PC">PC</option>
              <option value="Playstation 4">Playstation 4</option>
              <option value="XBox One">XBox One</option>
              <option value="Wii">Wii</option>
            </select>
            @if ($errors->has('platform'))
                <span>
                    <strong>{{ $errors->first('platform') }}</strong>
                </span>
            @endif
          </div>

          <div class="">
            <label for="">Genre</label>
            <select class="" name="genre">
              <option value="Accion">Accion</option>
              <option value="Aventura">Aventura</option>
              <option value="Pelea">Pelea</option>
              <option value="Tiritos">Tiritos</option>
            </select>
            @if ($errors->has('genres'))
                <span>
                    <strong>{{ $errors->first('genres') }}</strong>
                </span>
            @endif
          </div>

          <br><br><input type="submit" name="" value="Subir juego!" class="enviar">
        </form>
      </div>
    </div>
    <br><br>
@endsection