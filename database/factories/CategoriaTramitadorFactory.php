<?php

use Faker\Generator as Faker;

$factory->define(App\CategoriaTramitador::class, function (Faker $faker) {
    return [
        'id_usuario' => \App\User::role(['Tramitador'])->get()->random()->id,
        'porcentaje_curso' => $faker->numberBetween(0, 20),
        'porcentaje_sincurso' => $faker->numberBetween(0, 20)
    ];
});
