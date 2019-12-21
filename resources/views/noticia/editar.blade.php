@extends('layouts.app')


@section('content')
<div class="container" style="margin-top: 40px;padding: 25px; background:white">
    <form action="/Editar" method="post" enctype="multipart/form-data">{{csrf_field() }}

        <div>
            <h1>
                Editar Noticia
            </h1><hr>
        </div>
    
            <div class="form-group">
                <label><strong>Titulo de la noticia</strong></label>
                <input type="text" name="title" class="form-control" placeholder="" value="{{$noticia->title}}">
            </div>
            
            <div class="form-group">
                <label><strong>Imagen/foto</strong></label><br>
                <input type="file" name="foto" id="" value="{{ old('foto') }}"><br>
            </div>
    
            <div class="form-group">
                <label><strong>Subtitulo</strong></label>
                <input type="text" name="subtitle" class="form-control" placeholder="" value="{{$noticia->subtitle}}">
            </div>
    
            <div class="form-group">
                <label><strong>Cuerpo de la noticia</strong></label>
                <textarea class="form-control" name="cuerpo" rows="15">{{$noticia->cuerpo}}</textarea>
            </div>
    
            <input type="hidden" name="id" value="{{$noticia->id}}">
    
            
            <input class="btn btn-info" type="submit" value="Editar">
     </form>
     <a href="/Noticias/{{$noticia->id}}/Borrar"><button type="button" class="btn btn-danger">Borrar</button></a>     
    </div>
@endsection


</body>
</html>