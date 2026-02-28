<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryNilaisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('category_nilais')->delete();

        DB::table('category_nilais')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Ulangan Tengah Semester',
                'slug' => 'ulangan-tengah-semester',
                'created_at' => '2026-02-28 10:26:59',
                'updated_at' => '2026-02-28 10:26:59',
            ),
        ));
    }
}
