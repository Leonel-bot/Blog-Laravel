@extends('layouts.app')


@section('content')
<div class="card bg-dark text-white" style="background: url('https://images.wallpaperscraft.com/image/no_mans_sky_hello_games_ps4_pc_108038_1920x1080.jpg');height: 200px;width: 100%;background-position: right; margin-top: -23px;-webkit-box-shadow: 0px 7px 13px -2px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 7px 13px -2px rgba(0,0,0,0.75);
box-shadow: 0px 7px 13px -2px rgba(0,0,0,0.75);">
  <div class="card-img-overlay">
    <h1 class="card-title text-center"style="font-family: 'Bungee';" >NOTICIAS GAMERS</h1>
    <h3 class="card-text text-center"style="">El mas grande portal de noticias del mundo gamer y la cultura geek.</h3>
    <h3 class="card-text text-center"style="">Con noticias actualizadas de todo el mundo</h3>
  </div>
</div>
<div class="col-12">
<div class="card-deck" style="margin-top:40px;justify-content: center;">
@foreach($noticias as $noticia)
 <div class="card; col-12 col-lg-3" style="background:white; 0px 6px 16px -6px rgba(0,0,0,0.3);-moz-box-shadow: 0px 6px 16px -6px rgba(0,0,0,0.3);box-shadow: 0px 6px 16px -6px rgba(0,0,0,0.3); padding: 10px; margin: 10px;">
    <img src="/storage/{{$noticia->foto}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h1 style="font-family: 'Bebas Neue', cursive;" class="card-title">{{$noticia->title}}</h1><hr style="background:#FD7272">
      <h4 class="card-text">{{$noticia->subtitle}}</h4>
      <p class="card-text"><small class="text-muted">{{$noticia->created_at}}</small></p><hr>
      <a href="/Noticias/{{$noticia->id}}"><button style="width:150px;height: 50px; border:none;color: white; background: #B33771 ;font-size: 19px;">Leer Mas</button></a>
    </div>
  </div>
@endforeach
</div>
</div>


<!-- @if(Auth::user()->id == 1)
<div><a href="/Redactar"><button>Redactar</button></a></div>
@endif -->  
</body>
</html>
@endsection