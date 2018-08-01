<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['chat_id' => 502299226],
            ['chat_id' => -180862215],
        ];

        DB::table('chatroom')->insert($users);
    }
}