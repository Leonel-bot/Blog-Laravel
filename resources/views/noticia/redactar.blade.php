@extends('layouts.app')


@section('content')
<div class="container" style="margin-top: 40px;padding: 25px; background:white">
    <form action="/Redactar" method="post" enctype="multipart/form-data">{{csrf_field() }} 
        <div>
            <h1>
                Redactar una nueva noticia
            </h1><hr>
        </div>

        <div class="form-group">
                <strong>Titulo de la noticia</strong>
                <input type="text" name="title" class="form-control" placeholder="" value="">
            </div>
            
            <div class="form-group">
                <label><strong>Imagen/foto</strong></label><br>
                <input type="file" name="foto" id="" value=""><br>
            </div>
    
            <div class="form-group">
                <label><strong>Subtitulo</strong></label>
                <input type="text" name="subtitle" class="form-control" placeholder="" value="">
            </div>
    
            <div class="form-group">
                <label><strong>Cuerpo de la noticia</strong></label>
                <textarea class="form-control" name="cuerpo" rows="15"></textarea>
            </div>
        <input class="btn btn-primary" type="submit" value="Cargar">
        
    </form>
    
</div>
 @endsection   
</body>
</html>