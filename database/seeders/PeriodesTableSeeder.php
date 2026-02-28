<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriodesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('periodes')->delete();

        DB::table('periodes')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => '2025/2026',
                'created_at' => '2026-02-28 10:25:24',
                'updated_at' => '2026-02-28 10:25:24',
            ),
        ));
    }
}
