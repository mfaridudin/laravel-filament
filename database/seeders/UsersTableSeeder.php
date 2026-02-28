<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('users')->delete();

        DB::table('users')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$MF3sxg28JrAa.HfvoH5MfewDuGpXmAanmN9RHBZgtqRMvrSYKoPty',
                'remember_token' => '8OqmmDzGHgobdsWBBqEnu5tMemUOrJJWY20HuOmHjwXxwX6jlfX4vKyaLOXP',
                'created_at' => '2026-02-28 09:58:03',
                'updated_at' => '2026-02-28 09:58:03',
            ),
        ));
    }
}
