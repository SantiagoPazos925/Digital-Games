@extends('default')

@section('section')
<div class="container-fluid perfilInfo"style="background-color:#23282F">

  <div class="col-8 offset-1">
        <div class="row">
                <div class=" col-6 text-center ">

                        <img class="mx-5 my-5 imgGame" class="img-fluid  " alt="Responsive image" src="{{ Storage::url($game->image) }}">

                </div>
                <div class="col-6  "style="color:white">

                  <div class="registrate">
                    <h2>Sube tu juego!</h2>
                  </div>
                  <div class=" col-10 offset-1">
                    <div class="contenedor-fluid" id="contenedorForm">
                      <form class="login" action="" method="post" enctype="multipart/form-data" name="register">
                        @csrf
                        <input id="nombreCompleto" class="input"  type="text" name="name" value="{{ old('name', $game->name) }}" placeholder="Titulo" ><br>
                        <div>
                        @if ($errors->has('name'))
                            <span>
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                      </div>

                        <input id="nombreCompleto" class="input"  type="number" name="price" value="{{ old('price', $game->price) }}" placeholder="Precio" ><br>
                        <div>
                        @if ($errors->has('price'))
                            <span>
                                <strong>{{ $errors->first('price') }}</strong>
                            </span>
                        @endif
                      </div>
                        <input id="nombreCompleto" class="input"  type="number" name="stock" value="{{ old('stock', $game->stock) }}" placeholder="Stock" ><br>
                        <div>
                        @if ($errors->has('stock'))
                            <span>
                                <strong>{{ $errors->first('stock') }}</strong>
                            </span>
                        @endif
                      </div>
                        <input id="nombreCompleto" class="input"  type="text" name="release_date" value="{{ old('release_date', $game->release_date) }}" ><br>
                        <div>
                        @if ($errors->has('release_date'))
                            <span>
                                <strong>{{ $errors->first('release_date') }}</strong>
                            </span>
                        @endif
                      </div>
                        <label for="">Portada<br><br><input  type="file" name="image" value=""></label>
                        <br><br>
                        <div>
                        @if ($errors->has('image'))
                            <span>
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                        @endif
                      </div>
                        <div class="">
                          <label for="">Platform</label>
                          <select class="" name="platform">
                            <option value="">Seleccione su plataforma</option>
                            <option value="PC">PC</option>
                            <option value="Playstation 4">Playstation 4</option>
                            <option value="XBox One">XBox One</option>
                            <option value="Wii">Wii</option>
                          </select>
                          <div>
                          @if ($errors->has('platform'))
                              <span>
                                  <strong>{{ $errors->first('platform') }}</strong>
                              </span>
                          @endif
                        </div>
                        </div>

                        <div class="">
                          <label for="">Genre</label>
                          <select class="" name="genre">
                            <option value="">Seleccione un genero</option>
                            <option value="Accion">Accion</option>
                            <option value="Aventura">Aventura</option>
                            <option value="Pelea">Pelea</option>
                            <option value="Tiritos">Tiritos</option>
                          </select>
                          <div>
                          @if ($errors->has('genre'))
                              <span>
                                  <strong>{{ $errors->first('genre') }}</strong>
                              </span>
                          @endif
                        </div>
                        </div>

                        <br><br><input type="submit" name="" value="Editar juego!" class="enviar">
                      </form>
                    </div>
                  </div>
                  <br><br>

        </div>

  </div>

</div>
@endsection
