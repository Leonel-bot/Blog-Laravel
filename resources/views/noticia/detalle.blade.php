@extends('layouts.app')



@section('content')

  

                        <!-- DETALLE DE LA NOTICIA -->
        <div class="container card; col-12 col-lg-6" style=" background: white;padding: 10px; ">
            <img src="/storage/{{$noticia->foto}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h1 style="font-family: 'Bebas Neue', cursive;" class="card-title">{{$noticia->title}}</h1><hr style="background: rgb(255, 165, 80);">
              <h3 style="font-family: 'Roboto', sans-serif;" class="card-text">{{$noticia->subtitle}}</h3>
              <p style="font-family: 'Roboto', sans-serif;" class="card-text">{{$noticia->cuerpo}}</p>
              <p class="card-text"><small class="text-muted"> Redactado en {{$noticia->created_at->toFormattedDateString()}}</small></p>
              <div>
              @if(Auth::user()->id == 1)
              <a href="/Noticias/{{$noticia->id}}/Editar"><button type="button" class="btn btn-outline-info" >Editar</button></a>
               <!--  <a href="/Noticias/{{$noticia->id}}/Editar"><button>editar</button></a> -->
              @endif
              </div>
         </div><hr style="background: coral;">

         
            
                   <!-- SECCION DE COMENTARIOS -->

         <div class="form-group">
                   <form action="/Noticias/{{$noticia->id}}/Comentar" method="post">{{csrf_field() }}
                     <label for="">Comentar:</label>
                     <input type="hidden" name="noticia_id" value="{{$noticia->id}}">
                     <input type="hidden" name="user_name" value="{{User::class}}">
                     
                     <input type="text" name="texto" class="col-8" placeholder="" value="">  <input style="margin-left: 10px; width:100px; height: 30px; border:none;color: white; background:#B33771 ;" type="submit" value="Enviar">
                     <small class="form-text text-muted">Deje alguna opinion sobre la noticia que acaba de leer</small>
                  </form>
           </div>

 
                    <!-- LISTA DE COMENTARIOS -->
           @foreach($noticia->comentarios as $comentario)
       <div class="card">
         <div class="card-body">
             <strong>{{$comentario->users->name}} : </strong>{{$comentario->texto}}
             <small class="form-text text-muted">{{$comentario->created_at->diffForHumans()}}</small>
           </div>
         </div>
           @endforeach

       </div>  
                        

@endsection