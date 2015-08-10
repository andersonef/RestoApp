<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(RestoApp\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});

$factory->define(\RestoApp\Entities\Prato::class, function($faker){
    return [
        'idUsuario' => 1,
        'nomePrato' => $faker->sentence(3),
        'idTipoPrato' => $faker->numberBetween(1,4),
        'calPorcaoPrato' => $faker->numberBetween(30, 600)
    ];
});
