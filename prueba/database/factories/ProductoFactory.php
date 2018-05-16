<?php

use Faker\Generator as Faker;
use App\Models\Producto;

$factory->define(Producto::class, function (Faker $faker) {
    return [
 		'tpr_id' => 1,
		'pro_codigo_serial' => $faker->name ,
		'pro_nombre' => $faker->name ,
		'pro_descripcion' => $faker->text(100) ,
		'pro_estado' => 0,
		'pro_eliminado' => 0,
    ];
});



