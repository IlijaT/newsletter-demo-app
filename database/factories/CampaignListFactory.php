<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Campaign;
use App\CampaignList;
use Faker\Generator as Faker;

$factory->define(CampaignList::class, function (Faker $faker) {
    return [
        'hash_id' => $faker->swiftBicNumber,
        'title' => 'Learn Web Development',
        'is_active' => true,
    ];
});
