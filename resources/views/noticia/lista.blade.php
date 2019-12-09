@extends('layouts.app')


@section('content')

<div class="container">
<div class="card-deck">
@foreach($noticias as $noticia)
 <div class="card; col-12 col-lg-3" style="-webkit-box-shadow: 0px 6px 16px -6px rgba(0,0,0,0.3);-moz-box-shadow: 0px 6px 16px -6px rgba(0,0,0,0.3);box-shadow: 0px 6px 16px -6px rgba(0,0,0,0.3); padding: 10px; margin: 10px;">
    <img src="/storage/{{$noticia->foto}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h1 style="font-family: 'Bebas Neue', cursive;" class="card-title">{{$noticia->title}}</h1><hr style="background:#FD7272">
      <h4 class="card-text">{{$noticia->subtitle}}</h4>
      <p class="card-text"><small class="text-muted">{{$noticia->created_at}} Creado por: {{$noticia->user_id}}</small></p><hr>
      <a href="/Noticias/{{$noticia->id}}"><button style="width:150px;height: 50px; border:none;color: white; background: #B33771 ;font-size: 17px;">Leer Mas</button></a>
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