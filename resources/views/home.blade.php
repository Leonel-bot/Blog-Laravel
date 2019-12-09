@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

    @foreach($noticias as $noticia)
 <!--    <div class="container">
        <div>
            <img src="/storage/{{$noticia->foto}}" alt="">
        </div>
        <h2>{{$noticia->title}}</h2>
        <h4>{{$noticia->subtitle}}</h4>
        <p>{{$noticia->cuerpo}}</p>
        <p>{{$noticia->comentario}}</p>

        <a href="/Noticias/{{$noticia->id}}"><button>Leer Mas</button></a>
    </div> -->
    


 <!-- <div class="card; col-12 col-lg-4">
    <img src="/storage/{{$noticia->foto}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$noticia->title}}</h5><hr style="background: rgb(255, 165, 80);">
      <p class="card-text">{{$noticia->subtitle}}</p>
      <p class="card-text"><small class="text-muted">{{$noticia->created_at}}</small></p>
      <a href="/Noticias/{{$noticia->id}}"><button style="width:150px;height: 50px; border:none;color: white; background:rgb(184, 73, 184) ;">Leer Mas</button></a>
    </div><hr style="background: coral;">
    
  </div> -->



  @endforeach

    <div><a href="/Redactar"><button>Redactar</button></a></div>
    
</body>
</html>
