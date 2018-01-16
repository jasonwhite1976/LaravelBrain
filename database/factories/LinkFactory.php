<?php

use Faker\Generator;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Link::class, function (Generator $faker) {
    return [
        'title' => substr($faker->sentence(2), 0, -1),
        'url' => $faker->url,
        'url' => $faker->url,
        'description' => $faker->paragraph,
    ];
});
