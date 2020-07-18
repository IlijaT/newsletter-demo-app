<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Campaign;
use App\CampaignList;
use Faker\Generator as Faker;

$factory->define(CampaignList::class, function (Faker $faker) {
    return [
        'email' => $faker->email,
        'campaign_id' => factory(Campaign::class)
    ];
});
