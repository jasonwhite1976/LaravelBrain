<?php

use Faker\Generator as Faker;

$factory->define(App\Posts::class, function (Faker $faker) {
    return [
        'post_content' => substr($faker->sentence(2), 0, -1)
    ];
});
