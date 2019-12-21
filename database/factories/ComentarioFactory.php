<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comentario;
use Faker\Generator as Faker;

$factory->define(Comentario::class, function (Faker $faker) {
    return [
        'user_id' => rand(1,5),
        'texto' => 'Esto es un comentario del seeder',
        'noticia_id' => rand(1,20),
    ];
});
