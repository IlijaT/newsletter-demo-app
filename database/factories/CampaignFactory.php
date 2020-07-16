<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Campaign;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Campaign::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'date' => Carbon::now()->addDays(rand(1,50)),
        'subject' => $faker->sentence(3),
        'text' => $faker->paragraph,
    ];
});
