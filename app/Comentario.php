<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    public function noticias()
    {
        return $this->belongsTo('App\Noticia;');
    }

    public function users()
    {
        return $this->belongsTo('App\User;');
    }
}
