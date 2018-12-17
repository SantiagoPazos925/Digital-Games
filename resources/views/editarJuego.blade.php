@extends('default')

@section('section')
<div class="container-fluid perfilInfo"style="background-color:#23282F">
 
  <div class="col-8 offset-1">
        <div class="row">
                <div class=" col-6 text-center ">
            
                        <img class="mx-5 my-5 imgGame" class="img-fluid  " alt="Responsive image" src="{{ Storage::url($game->image) }}">
                    
                </div>
                <div class="col-6  "style="color:white">
                      
                        <div class="mx-5 my-5 ">
                                <form class="login" action="" method="post" enctype="multipart/form-data" name="register">
                                        @csrf
                                <div class=row>
                                        <div class="col-4">
                                                <label class="my-2 " style="font-size:30px;"for="">Nombre: </label>
                                                <label class="my-2" style="font-size:30px;"for="">Plataforma: </label> 
                                                <label class="my-2"style="font-size:30px;"for="">Genre: </label>
                                                <label class="my-2"style="font-size:30px;"for="">Precio: </label>
                                                <label class="my-2"style="font-size:30px;"for="">Stock: </label>
                                        </div>
                                        <div class="col-8">
                                                <input type="text" class="input" name="name" value="{{$game->name}}">
                                                <div class="">
                                                        <select class="input" name="platform">
                                                                <option 
                                                                @if ($game->platform=='PC')
                                                                        {{'selected'}}
                                                                @endif value="PC">PC </option>

                                                                <option  
                                                                @if ($game->platform=='PS4')
                                                                        {{'selected'}}
                                                                @endif value="Playstation 4">Playstation 4</option>
                                                                <option  
                                                                @if ($game->platform=='XBox One')
                                                                        {{'selected'}}
                                                                @endif value="XBox One">XBox One</option>
                                                                <option  
                                                                @if ($game->platform=='Wii')
                                                                        {{'selected'}}
                                                                @endif value="Wii">Wii</option>
                                                        </select>
                                                                @if ($errors->has('platform'))
                                                                    <span>
                                                                        <strong>{{ $errors->first('platform') }}</strong>
                                                                    </span>
                                                                @endif
                                                              </div>
                                                <div class="">
                                                                        
                                                        <select class="input" name="genre">
                                                                <option 
                                                                @if ($game->genre=='Accion')
                                                                        {{'selected'}}
                                                                @endif value="Accion">Accion</option>
                                                                <option 
                                                                @if ($game->genre=='Aventura')
                                                                        {{'selected'}}
                                                                @endif value="Aventura">Aventura</option>
                                                                <option 
                                                                @if ($game->genre=='Pelea')
                                                                        {{'selected'}}
                                                                @endif value="Pelea">Pelea</option>
                                                                <option 
                                                                @if ($game->genre=='Tiritos')
                                                                        {{'selected'}}
                                                                @endif value="Tiritos">Tiritos</option>
                                                        </select>
                                                        @if ($errors->has('genres'))
                                                                <span>
                                                                <strong>{{ $errors->first('genres') }}</strong>
                                                                </span>
                                                        @endif
                                                </div>
                                                <input type="text" class="input" name="price" value="{{$game->price}}">
                                                <input type="text" class="input" name="stock" value="{{$game->stock}}">
                                        </div>
                                       
                                </div>
                                        <input type="number" name="id" value="{{$game->id}}" style="display:none">
                                        <br><br><input type="submit" name="" value="Guardar" class="enviar">
                                </form>
                        </div>
                        
                   
                            
                        
                      
        
        
        
        
                </div>
        
        </div>
       
  </div>

</div>
@endsection
