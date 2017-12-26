<?php

use Faker\Generator;

$factory->define(App\Posts::class, function (Generator $faker) {
    return [
        'title' => substr($faker->sentence(2), 0, -1),
        'slug' => $faker->url,
        'post_content' => $faker->paragraph,
    ];
});
