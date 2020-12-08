<?php

use ForumRealtime\Models\Reply;
use Illuminate\Database\Seeder;

class ThreadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $threads = factory(\ForumRealtime\Models\Thread::class, 50)->create();
        $threads->each(function ($thread) {
            factory(Reply::class, rand(5, 10))->create(['thread_id' => $thread->id]);
        });
    }
}
