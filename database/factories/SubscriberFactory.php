<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CampaignList;
use App\Subscriber;
use Faker\Generator as Faker;

$factory->define(Subscriber::class, function (Faker $faker) {
    return [
        'email' => $faker->email,
        'campaign_list_id' => factory(CampaignList::class),
        'hash_list_id' => $faker->swiftBicNumber
    ];
});
