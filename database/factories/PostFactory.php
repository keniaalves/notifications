<?php

use App\Model\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->unique()->word,
        'body' => $faker->sentence,
        'user_id' => 1,
    ];
});
