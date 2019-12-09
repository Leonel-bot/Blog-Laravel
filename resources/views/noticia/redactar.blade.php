@extends('layouts.app')


@section('content')
<div class="container">
    <form action="/Redactar" method="post" enctype="multipart/form-data">{{csrf_field() }} 
        <div>
            <h1>
                Redactar una nueva noticia
            </h1><hr>
        </div>

        <div class="form-group">
                <label>Titulo de la noticia</label>
                <input type="text" name="title" class="form-control" placeholder="" value="">
            </div>
            
            <div class="form-group">
                <label>Imagen/foto</label><br>
                <input type="file" name="foto" id="" value=""><br>
            </div>
    
            <div class="form-group">
                <label>Subtitulo</label>
                <input type="text" name="subtitle" class="form-control" placeholder="" value="">
            </div>
    
            <div class="form-group">
                <label>Cuerpo de la noticia</label>
                <textarea class="form-control" name="cuerpo" rows="15"></textarea>
            </div>
        <input class="btn btn-primary" type="submit" value="Cargar">
        
    </form>
    
</div>
 @endsection   
</body>
</html>