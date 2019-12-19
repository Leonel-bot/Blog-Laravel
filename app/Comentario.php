<?php
use App\User;

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    public function noticias()
    {
        return $this->belongsTo(Noticia::class, 'noticia_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
