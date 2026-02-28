<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('subjects')->delete();

        DB::table('subjects')->insert(array(
            0 =>
            array(
                'id' => 1,
                'kode' => '12121212',
                'name' => 'Matematika',
                'slug' => 'matematika',
                'created_at' => '2026-02-28 10:01:08',
                'updated_at' => '2026-02-28 10:01:08',
            ),
        ));
    }
}
