<?php

use Faker\Generator as Faker;
use ForumRealtime\Models\Thread;
use ForumRealtime\Models\User;

$factory->define(Thread::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => implode(' ', $faker->paragraphs),
        'user_id' => function () {
            return factory(User::class)->create()->id;
        }
    ];
});
