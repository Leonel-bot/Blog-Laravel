<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Noticia;
use Faker\Generator as Faker;

$factory->define(Noticia::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'title'=> 'Google compra un nuevo estudio para reforzar el desarrollo de juegos para Stadia',
        'subtitle'=> 'Se trata de Typhoon Studios, el equipo responsable del inédito Journey to the Savage Planet.',
        'cuerpo' => 'Google anunció ayer la adquisición de un nuevo equipo de desarrollo interno para Stadia Games and Entertainment, la división del gigante tecnológico de Mountain View liderada por Jade Raymond, con el objetivo de desarrollar nuevos videojuegos para la plataforma de streaming. En concreto hablamos de Typhoon Studios, creadores de la prometedora aventura de ciencia ficción Journey to the Savage Planet.Siempre estamos buscando gente que comparta nuestra pasión y visión del futuro sobre la industria"Siempre estamos buscando gente que comparta nuestra pasión y visión del futuro sobre la industria. Por ese motivo, estoy bastante emocionada de anunciar que Typhoon Studios, el equipo indie detrás del inminente Journey to the Savage Planet, se une a Stadia", confirmó la antigua directora de Ubisoft Toronto. "Typhoon Studios ha creado un increíble equipo de veteranos del sector que están comprometidos con brindar la mejor experiencia al jugador", continuó Raymond añadiendo que su estructura se unirá al primer estudio de Stadia con sede en Montreal dirigido por Sébastien Puel, productor de Assassins Creed II.Este movimiento no cambia los planes de lanzamiento de Journey to the Savage Planet en exclusiva en PC para Epic Games Store, PlayStation 4 y Xbox One.La compra de estudios se está molviendo un asunto de actualidad habitual en el sector. A las ya habituales adquisiciones de Microsoft para Xbox Games Studios también hemos sumado refuerzos recientes en los equipos internos de Sony PlayStation. Epic Games también quiso agitar el tablero con los creadores de Rocket League y desde THQ Nordic, poco a poco, se están labrando una enorme plantilla de filiales.',
        'foto' =>  $faker->imageUrl($width= 1200, $heigth= 400),
    ];
});
