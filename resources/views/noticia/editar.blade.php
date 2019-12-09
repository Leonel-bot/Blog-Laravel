@extends('layouts.app')


@section('content')
<div class="container">
    <form action="/Editar" method="post" enctype="multipart/form-data">{{csrf_field() }}
    
            <div class="form-group">
                <label>Titulo de la noticia</label>
                <input type="text" name="title" class="form-control" placeholder="" value="{{$noticia->title}}">
            </div>
            
            <div class="form-group">
                <label>Imagen/foto</label><br>
                <input type="file" name="foto" id="" value="{{ old('foto') }}"><br>
            </div>
    
            <div class="form-group">
                <label>Subtitulo</label>
                <input type="text" name="subtitle" class="form-control" placeholder="" value="{{$noticia->subtitle}}">
            </div>
    
            <div class="form-group">
                <label>Cuerpo de la noticia</label>
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