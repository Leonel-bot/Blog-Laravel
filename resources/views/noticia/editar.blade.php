<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/Editar" method="post">{{csrf_field() }}

           <label for="">TITULO</label>{{ old('edad') }}
           <input type="text" name="title" id="" value="{{$noticia->title}}"><br>
           <label for="">FOTO</label>
           <input type="file" name="foto" id="" value="{{$noticia->foto}}"><br>

           <label for="">SUBTITULO</label>
           <input type="text" name="subtitle" id="" value="{{$noticia->subtitle}}"><br>

           <label for="">CUERPO DE LA NOTICIA</label>
           <input type="text" name="cuerpo" id="" value="{{$noticia->cuerpo}}"><br>

           <input type="hidden" name="id" value="{{$noticia->id}}">


           <input type="submit" value="Cambiar">
           
    </form>
    <a href="/Noticias/{{$noticia->id}}/Borrar"><button>borrar</button></a>
    
</body>
</html>