<?php

namespace App;
use App\Noticia;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    public $guarder= [];

    public function users()
    {
        return $this->belongsTo('App\User');
    }
    public function comentarios()
    {
        return $this->hasMany('App\Comentario');
    }
}

 