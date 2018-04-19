<?php

use Faker\Generator as Faker;

$factory->define(App\Course::class, function (Faker $faker) {
    $title = $faker->words(5, true);

    return [
        'category_id'   => null,
        'author_id'     => null,
        'title'         => $title,
        'description'   => $faker->paragraph(5),
        'thumbnail'     => '',
        'rating'        => $faker->numberBetween(0, 5),
        'student_count' => $faker->numberBetween(0, 1000),
        'price'         => $faker->randomElement([0, 5, 10, 50, 100, 150]),
        'status'        => $faker->randomElement([1, 2]),
    ];
});
