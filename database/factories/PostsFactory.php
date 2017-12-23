<?php

use Faker\Generator;

$factory->define(App\Posts::class, function (Generator $faker) {
    return [
        'post_content' => substr($faker->sentence(2), 0, -1)
    ];
});
