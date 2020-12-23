<?php

use Illuminate\Database\Seeder;
use ForumRealtime\Models\Thread;

class ThreadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Thread::class, 50)->create();
    }
}
