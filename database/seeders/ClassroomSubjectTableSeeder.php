<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassroomSubjectTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('classroom_subject')->delete();

        DB::table('classroom_subject')->insert(array(
            0 =>
            array(
                'id' => 1,
                'classroom_id' => 1,
                'subject_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'Pelajaran Matematika',
            ),
        ));
    }
}
