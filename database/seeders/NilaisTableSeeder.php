<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NilaisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('nilais')->delete();

        DB::table('nilais')->insert(array(
            0 =>
            array(
                'id' => 1,
                'class_id' => 1,
                'student_id' => 1,
                'periode_id' => 1,
                'teacher_id' => 1,
                'subject_id' => 1,
                'category_nilai_id' => 1,
                'nilai' => 90.0,
                'created_at' => '2026-02-28 13:31:32',
                'updated_at' => '2026-02-28 13:31:32',
            ),
        ));
    }
}
