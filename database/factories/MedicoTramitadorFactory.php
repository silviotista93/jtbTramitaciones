<?php

use Faker\Generator as Faker;

$factory->define(App\MedicoTramitador::class, function (Faker $faker) {
    return [
        'id_usuario' => \App\User::role(['Tramitador'])->get()->random()->id,
        'porcentaje_unico' => $faker->numberBetween(0, 20),
        'porcentaje_doble' => $faker->numberBetween(0, 20)
    ];
});
