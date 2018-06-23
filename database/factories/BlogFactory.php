<?php

$factory->define(App\Blog::class, function (Faker\Generator $faker) {
    return [
        "head_line" => $faker->name,
        "post" => $faker->name,
    ];
});
