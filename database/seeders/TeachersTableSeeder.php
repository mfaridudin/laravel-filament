<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeachersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('teachers')->delete();

        DB::table('teachers')->insert(array(
            0 =>
            array(
                'id' => 1,
                'nip' => '123454657564534',
                'name' => 'Pak Agus',
                'address' => 'Semarang',
                'profile' => 'teachers/01KJHWE9XEGPKMCDXRVTXG43PD.png',
                'created_at' => '2026-02-28 10:24:24',
                'updated_at' => '2026-02-28 10:24:24',
            ),
        ));
    }
}
