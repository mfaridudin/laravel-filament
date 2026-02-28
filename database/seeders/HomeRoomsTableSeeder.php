<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeRoomsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('home_rooms')->delete();

        DB::table('home_rooms')->insert(array(
            0 =>
            array(
                'id' => 1,
                'teachers_id' => 1,
                'classrooms_id' => 1,
                'periode_id' => 1,
                'is_open' => 1,
                'created_at' => '2026-02-28 10:27:37',
                'updated_at' => '2026-02-28 10:27:37',
            ),
        ));
    }
}
