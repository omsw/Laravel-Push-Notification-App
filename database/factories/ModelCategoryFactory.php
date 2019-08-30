<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Model::class, function (Faker $faker) {
    $word = $faker->word;
    return [
        //
        "name" => $word,
        "slug" => srt_slug($word)
    ];
});
