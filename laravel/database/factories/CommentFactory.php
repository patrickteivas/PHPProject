<?php

use Faker\Generator as Faker;

$factory->define(\App\Comment::class, function (Faker $faker) {
    $created = $faker->dateTime();
    $updated = $faker->dateTimeBetween($created);
    return [
        'content' => $faker->sentence(3, true),
        'author' => $faker->name,
        'created_at' => $created,
        'updated_at' => $updated
    ];
});