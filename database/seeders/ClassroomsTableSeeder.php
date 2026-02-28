<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassroomsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('classrooms')->delete();

        DB::table('classrooms')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Kelas 1A',
                'slug' => 'kelas-1a',
                'created_at' => '2026-02-28 10:00:17',
                'updated_at' => '2026-02-28 10:00:17',
            ),
        ));
    }
}
