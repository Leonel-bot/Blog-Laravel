<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>{{$noticia->title}}</h2>
        <div>
            <img src="/storage/{{$noticia->foto}}" alt="">
        </div>
        <h4>{{$noticia->subtitle}}</h4>
        <p>{{$noticia->cuerpo}}</p><hr>
        <p>{{$noticia->user_id}}</p><hr>
       

        @foreach($noticia->comentarios as $comentario)
        <p>{{$comentario->texto}} Dijo: {{$comentario->user_id}}</p>
        @endforeach
        


        <!-- EL USUARIO REGISTRADO VA A TENER ACA UN FORMULARIO PARA CARGAR COMENTARIOS -->
        <!-- <form action="/Comentario" method="post">{{csrf_field() }}
            <label for="">Deje un comentario</label><br>
            <input type="text" name="texto" id="">
            <input type="hidden" name="noticia_id" value="{{$noticia->id}}"><br>
            

            <input type="submit" value="Enviar">


        </form> -->
        <form action="/Noticias/{{$noticia->id}}/Comentar" method="post">{{csrf_field() }}
            <label for="">Deje un comentario</label><br>
            <input type="text" name="texto" id="">
            <input type="hidden" name="noticia_id" value="{{$noticia->id}}"><br>
            

            <input type="submit" value="Enviar">


        </form>
        
        

        <a href="/Noticias/{{$noticia->id}}/Editar"><button>editar</button></a>
        
    </div>
    
    
</body>
</html>