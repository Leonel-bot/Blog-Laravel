<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach($noticias as $noticia)
    <div class="container">
        <div>
            <img src="/storage/{{$noticia->foto}}" alt="">
        </div>
        <h2>{{$noticia->title}}</h2>
        <h4>{{$noticia->subtitle}}</h4>
        <p>{{$noticia->cuerpo}}</p>
        <p>{{$noticia->comentario}}</p>

        <a href="/Noticias/{{$noticia->id}}"><button>Leer Mas</button></a>
    </div>
    @endforeach

    <div><a href="/Redactar"><button>Redactar</button></a></div>
    
</body>
</html>