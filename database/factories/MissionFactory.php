<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Models\Mission::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->paragraphs(5, true),
        'reward' => $faker->randomElement([100000, 500000, 1000000]),
        'owner_id' => 1,
        'status' => \App\Enums\MissionStatus::DRAFT,
        'due_date' => $faker->dateTimeBetween('now', '+1 month'),
    ];
});
