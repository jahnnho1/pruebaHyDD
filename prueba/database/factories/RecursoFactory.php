<?php

use Faker\Generator as Faker;
use App\Models\Recurso;

$factory->define(Recurso::class, function (Faker $faker) {
    return [ 		
		'rec_estado' => 0,
		'rec_eliminado' => 0,
		'rec_es_principal' => 1,
		'rec_url' => $faker->imageUrl(400, 300),
    ];
});



