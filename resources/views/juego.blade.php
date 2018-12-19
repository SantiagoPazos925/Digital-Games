@extends('default')

@section('section')

<div class="container-fluid perfilInfo"style="background-color:#23282F">
 
  <div class="col-12 ">
        <div class="row">
                <div class="text-center col-md-8 offset-md-2 col-lg-4 offset-lg-1 ">
                    <img class="my-lg-5 imgGame" class="img-fluid " alt="Responsive image" src="{{ Storage::url($game->image) }}">
                </div>
            
                        
                    
               
                <div class="col-12 col-lg-6   "style="color:white">
                      
                        <div class="mx-5 my-5 ">
                        <h1 class="nameGame">{{$game->name}}</h1>
                        <h4 class="priceGame">${{$game->price}}</h4>
                        <h4>Plataforma: {{$game->platform}}</h4>
                        <h4>Genero: {{$game->genre}}</h4>   
                        
                        <h4>Fecha de lanzamiento: {{date('d-m-Y', strtotime($game->release_date))}}</h4>
                        </div>
                        <div class="row">
                            @auth
                                @if (Auth::user()->email=='admin@admin.com')
                                    <div class=col-6>
                                    
                                        <a class="enviar" href="/editarJuego/{{$game->id}}">Editar</a>
                                                
                                    </div>
                                    <div class=col-6>
                                        <a class="enviar" href="/borrarJuego/{{$game->id}}">Borrar</a>  
                                    </div>
                                    @endauth
                                @endif
                                    
                        </div>
                      
        
        
        
        
                </div>
                
        </div>
       
  </div>

</div>
@endsection
