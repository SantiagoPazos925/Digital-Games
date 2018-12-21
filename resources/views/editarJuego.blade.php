@extends('default')

@section('section')
<div class="container-fluid perfilInfo"style="background-color:#23282F">

  <div class="col-12 ">
        <div class="row">
                <div class=" text-center col-lg-6">

                        <img class="mx-lg-5 my-lg-5  imgGame" class="img-fluid  " alt="Responsive image" src="{{ Storage::url($game->image) }}">

                </div>



                <div class="col-md-12 col-lg-6  "style="color:white">


                  <div class="col-12">
                      <h2 class="" style="color:white; text-align:center">Edita tu juego!</h2>
                    <div class="contenedor-fluid" id="contenedorForm">

                      <form class="login" action="" method="post" enctype="multipart/form-data" name="register" onsubmit="return validarUpdateJuego()">
                        @csrf
                        <input id="name" class="input col-12 col-md-6"  type="text" name="name" value="{{ old('name', $game->name) }}" placeholder="Titulo" ><br>
                        <div>
                        @if ($errors->has('name'))
                            <span>
                                <strong style="color:red" style="color:red">{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                      </div>

                        <input id="price" class="input col-12 col-md-6" type="number" name="price" value="{{ old('price', $game->price) }}" placeholder="Precio" ><br>
                        <div>
                        @if ($errors->has('price'))
                            <span>
                                <strong style="color:red">{{ $errors->first('price') }}</strong>
                            </span>
                        @endif
                      </div>
                        <input id="stock" class="input col-12 col-md-6"  type="number" name="stock" value="{{ old('stock', $game->stock) }}" placeholder="Stock" ><br>
                        <div>
                        @if ($errors->has('stock'))
                            <span>
                                <strong style="color:red">{{ $errors->first('stock') }}</strong>
                            </span>
                        @endif
                      </div>
                        <input id="release_date" class="input col-12 col-md-6"  type="text" name="release_date" value="{{ old('release_date', $game->release_date) }}" ><br>
                        <div>
                        @if ($errors->has('release_date'))
                            <span>
                                <strong style="color:red">{{ $errors->first('release_date') }}</strong>
                            </span>
                        @endif
                      </div>
                        <label id="image" for="">Portada<br><br><input  type="file" name="image" value=""></label>
                        <br><br>
                        <div>
                        @if ($errors->has('image'))
                            <span>
                                <strong style="color:red">{{ $errors->first('image') }}</strong>
                            </span>
                        @endif
                      </div>
                        <div class="">

                          <select id="platform" class="input col-12 col-md-6" name="platform">
                            <option value="">Plataforma</option>
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
                        </div>

                        <div class="">

                          <select id="genre" class="input col-12 col-md-6" name="genre">
                            <option value="">Genero</option>
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

                        <br><br><input type="submit" name="" value="Editar juego!" class="enviar">
                      </form>
                    </div>
                  </div>
                  <br><br>

        </div>

  </div>

</div>
@endsection
