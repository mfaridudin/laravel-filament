<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StudentHasClassTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('student_has_class')->delete();
        
        DB::table('student_has_class')->insert(array (
            0 => 
            array (
                'id' => 1,
                'students_id' => 1,
                'classrooms_id' => 1,
                'periode_id' => 1,
                'is_open' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}