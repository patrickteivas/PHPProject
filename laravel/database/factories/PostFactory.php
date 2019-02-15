<?php

use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {
    $created = $faker->dateTime();
    $updated = $faker->dateTimeBetween($created);
    return [
        'title' => $faker->sentence(6, true),
        'content' => $faker->paragraph(3, true),
        'author' => $faker->name,
        'created_at' => $created,
        'updated_at' => $updated
    ];
});
