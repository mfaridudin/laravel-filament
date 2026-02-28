<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('students')->delete();

        DB::table('students')->insert(array(
            0 =>
            array(
                'id' => 1,
                'nis' => '12133131313',
                'name' => 'Andi',
                'gender' => 'Male',
                'status' => 'accept',
                'birthday' => '2020-08-19',
                'religion' => 'Islam',
                'contact' => '082131342328434',
                'profile' => 'students/01KJHWC3RTYXW44ZW4KQJ38KCB.png',
                'created_at' => '2026-02-28 10:23:12',
                'updated_at' => '2026-02-28 10:23:12',
            ),
        ));
    }
}
