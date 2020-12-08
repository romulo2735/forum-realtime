<?php

use Faker\Generator as Faker;
use ForumRealtime\Models\Reply;
use ForumRealtime\Models\User;
use ForumRealtime\Models\Thread;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'body' => $faker->paragraph,
        'user_id' => function () {
            return factory(User::class)->create()->id;
        },
        'thread_id' => function () {
            return factory(Thread::class)->create()->id;
        }
    ];
});
