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


$factory->define(Wtc\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt('secret'),
        'type' => 0,
        'remember_token' => str_random(10),
    ];
});

$factory->define(Wtc\Post::class, function (Faker\Generator $faker) {
    return [
        'title' => "Este es un titulo de ejemplo para el blog de wtc-talent",
        'branch' => "Desarrollo Organizacional",
        'description' => $faker->text,
        'intro_post' => $faker->paragraph,
        'body_post' => $faker->paragraph,
        'conclusion_post' => $faker->paragraph,
        'img' => "http://profesionaleson.eu/wp-content/uploads/2013/04/gerente-integral-buscado-por-empresas-desarrollo-organizativo-profesionales-on-580x333.jpg",
        'source' => "www.google.com.mx",
        'author_id' => 1,

    ];
});


$factory->define(Wtc\Vacancy::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence($nbWords = 6),
        'city' => $faker->address,
        'area' => "Calidad",
        'description' => $faker->paragraph,
        'other' => $faker->text,
        'salary' => 1000,
    ];
});
