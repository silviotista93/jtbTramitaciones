<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    $name = $faker->name;
    $apellidos = $faker->lastName;
    $estado = $faker->randomElement([\App\User::ACTIVE, \App\User::INACTIVE]);
    return [
        'name' => $name,
        'apellidos' => $apellidos,
        'identificacion' => $faker->unique()->numberBetween(0, 300),
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'telefono' => $faker->phoneNumber,
        'telefono_2' => $faker->phoneNumber,
        'foto' => '/adminlte/img/perfil.jpg',
        'remember_token' => str_random(10),
    ];
});
