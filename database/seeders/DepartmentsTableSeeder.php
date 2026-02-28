<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('departments')->delete();

        DB::table('departments')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name_department' => 'Rekayasa Perangkat Lunak',
                'slug' => 'rekayasa-perangkat-lunak',
                'description' => 'Jurusan yang mempelajari bahasa pemrograman',
                'created_at' => '2026-02-28 10:21:04',
                'updated_at' => '2026-02-28 10:21:04',
            ),
        ));
    }
}
