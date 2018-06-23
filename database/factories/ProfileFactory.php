<?php

$factory->define(App\Profile::class, function (Faker\Generator $faker) {
    return [
        "name" => $faker->name,
        "phone_number" => $faker->name,
        "email" => $faker->safeEmail,
        "faceebook_id" => $faker->name,
        "blood_group" => collect(["Aplus","Aminus","Bplus","Bminus","ABplus","ABminus","Oplus","Ominus",])->random(),
        "status" => collect(["Available","Unavailable",])->random(),
        "last_donation" => $faker->date("d-m-Y", $max = 'now'),
        "location" => $faker->name,
        "details_information" => $faker->name,
    ];
});
