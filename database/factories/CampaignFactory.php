<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Campaign;
use App\CampaignList;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Campaign::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'hash_id' => Str::random(10),
        'send_time' => Carbon::now()->addDays(rand(1,50)),
        'subject' => $faker->sentence(3),
        'text' => $faker->paragraph,
        'from_name' => $faker->email,
        'reply_to' => $faker->email,
        'sent_url' => $faker->url,
        'delete_url' => $faker->url,
        'emails_sent' => null,
        'from_name' => $faker->word,
        'hash_list_id' => Str::random(10),
        'campaign_list_id' => 1,
    ];
});
