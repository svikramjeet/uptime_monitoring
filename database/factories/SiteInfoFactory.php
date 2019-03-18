<?php

use Faker\Generator as Faker;

$factory->define(App\SiteInfo::class, function (Faker $faker) {
    return [
        'site_name' => $faker->company,
        'url' => $faker->url,
        'custom_meta' => '',
        'meta_title' => '',
        'faicon' => '',
        'is_crawled' => 'false',
    ];
});
