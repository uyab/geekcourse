<?php

use Faker\Generator as Faker;

$factory->define(App\Video::class, function (Faker $faker) {
    return [
        'title' => $faker->words(5, true),
        'course_id' => null,
        'order' => $faker->numberBetween(1, 10),
        'path' => '',
    ];
});
