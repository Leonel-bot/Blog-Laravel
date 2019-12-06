<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/Redactar" method="post" enctype="multipart/form-data">{{csrf_field() }} 
        
        <label for="">Foto</label>
        <input type="file" name="foto" id=""><br>

        <label for="">TITULO</label>
        <input type="text" name="title" id=""><br>

        <label for="">SUBTITULO</label>
        <input type="text" name="subtitle" id=""><br>

        <label for="">CUERPO DE LA NOTICIA</label>
        <input type="text" name="cuerpo" id=""><br>



        <input type="submit" value="Cargar">
    </form>
    
</body>
</html>