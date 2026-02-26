<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('permissions')->delete();

        DB::table('permissions')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'ViewAny:Adjacency',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:37',
                'updated_at' => '2026-02-26 01:58:37',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'View:Adjacency',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:37',
                'updated_at' => '2026-02-26 01:58:37',
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Create:Adjacency',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:37',
                'updated_at' => '2026-02-26 01:58:37',
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'Update:Adjacency',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:37',
                'updated_at' => '2026-02-26 01:58:37',
            ),
            4 =>
            array(
                'id' => 5,
                'name' => 'Delete:Adjacency',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:37',
                'updated_at' => '2026-02-26 01:58:37',
            ),
            5 =>
            array(
                'id' => 6,
                'name' => 'Restore:Adjacency',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:37',
                'updated_at' => '2026-02-26 01:58:37',
            ),
            6 =>
            array(
                'id' => 7,
                'name' => 'ForceDelete:Adjacency',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:37',
                'updated_at' => '2026-02-26 01:58:37',
            ),
            7 =>
            array(
                'id' => 8,
                'name' => 'ForceDeleteAny:Adjacency',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:37',
                'updated_at' => '2026-02-26 01:58:37',
            ),
            8 =>
            array(
                'id' => 9,
                'name' => 'RestoreAny:Adjacency',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:37',
                'updated_at' => '2026-02-26 01:58:37',
            ),
            9 =>
            array(
                'id' => 10,
                'name' => 'Replicate:Adjacency',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:37',
                'updated_at' => '2026-02-26 01:58:37',
            ),
            10 =>
            array(
                'id' => 11,
                'name' => 'Reorder:Adjacency',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:37',
                'updated_at' => '2026-02-26 01:58:37',
            ),
            11 =>
            array(
                'id' => 12,
                'name' => 'ViewAny:CategoryNilaisModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            12 =>
            array(
                'id' => 13,
                'name' => 'View:CategoryNilaisModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            13 =>
            array(
                'id' => 14,
                'name' => 'Create:CategoryNilaisModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            14 =>
            array(
                'id' => 15,
                'name' => 'Update:CategoryNilaisModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            15 =>
            array(
                'id' => 16,
                'name' => 'Delete:CategoryNilaisModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            16 =>
            array(
                'id' => 17,
                'name' => 'Restore:CategoryNilaisModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            17 =>
            array(
                'id' => 18,
                'name' => 'ForceDelete:CategoryNilaisModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            18 =>
            array(
                'id' => 19,
                'name' => 'ForceDeleteAny:CategoryNilaisModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            19 =>
            array(
                'id' => 20,
                'name' => 'RestoreAny:CategoryNilaisModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            20 =>
            array(
                'id' => 21,
                'name' => 'Replicate:CategoryNilaisModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            21 =>
            array(
                'id' => 22,
                'name' => 'Reorder:CategoryNilaisModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            22 =>
            array(
                'id' => 23,
                'name' => 'ViewAny:ClassroomsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            23 =>
            array(
                'id' => 24,
                'name' => 'View:ClassroomsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            24 =>
            array(
                'id' => 25,
                'name' => 'Create:ClassroomsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            25 =>
            array(
                'id' => 26,
                'name' => 'Update:ClassroomsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            26 =>
            array(
                'id' => 27,
                'name' => 'Delete:ClassroomsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            27 =>
            array(
                'id' => 28,
                'name' => 'Restore:ClassroomsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            28 =>
            array(
                'id' => 29,
                'name' => 'ForceDelete:ClassroomsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            29 =>
            array(
                'id' => 30,
                'name' => 'ForceDeleteAny:ClassroomsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            30 =>
            array(
                'id' => 31,
                'name' => 'RestoreAny:ClassroomsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            31 =>
            array(
                'id' => 32,
                'name' => 'Replicate:ClassroomsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            32 =>
            array(
                'id' => 33,
                'name' => 'Reorder:ClassroomsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            33 =>
            array(
                'id' => 34,
                'name' => 'ViewAny:DepartmentsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            34 =>
            array(
                'id' => 35,
                'name' => 'View:DepartmentsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            35 =>
            array(
                'id' => 36,
                'name' => 'Create:DepartmentsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            36 =>
            array(
                'id' => 37,
                'name' => 'Update:DepartmentsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            37 =>
            array(
                'id' => 38,
                'name' => 'Delete:DepartmentsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            38 =>
            array(
                'id' => 39,
                'name' => 'Restore:DepartmentsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            39 =>
            array(
                'id' => 40,
                'name' => 'ForceDelete:DepartmentsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            40 =>
            array(
                'id' => 41,
                'name' => 'ForceDeleteAny:DepartmentsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            41 =>
            array(
                'id' => 42,
                'name' => 'RestoreAny:DepartmentsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            42 =>
            array(
                'id' => 43,
                'name' => 'Replicate:DepartmentsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            43 =>
            array(
                'id' => 44,
                'name' => 'Reorder:DepartmentsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            44 =>
            array(
                'id' => 45,
                'name' => 'ViewAny:Nilai',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            45 =>
            array(
                'id' => 46,
                'name' => 'View:Nilai',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            46 =>
            array(
                'id' => 47,
                'name' => 'Create:Nilai',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            47 =>
            array(
                'id' => 48,
                'name' => 'Update:Nilai',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            48 =>
            array(
                'id' => 49,
                'name' => 'Delete:Nilai',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            49 =>
            array(
                'id' => 50,
                'name' => 'Restore:Nilai',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            50 =>
            array(
                'id' => 51,
                'name' => 'ForceDelete:Nilai',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            51 =>
            array(
                'id' => 52,
                'name' => 'ForceDeleteAny:Nilai',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            52 =>
            array(
                'id' => 53,
                'name' => 'RestoreAny:Nilai',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            53 =>
            array(
                'id' => 54,
                'name' => 'Replicate:Nilai',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            54 =>
            array(
                'id' => 55,
                'name' => 'Reorder:Nilai',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            55 =>
            array(
                'id' => 56,
                'name' => 'ViewAny:PeriodesModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            56 =>
            array(
                'id' => 57,
                'name' => 'View:PeriodesModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            57 =>
            array(
                'id' => 58,
                'name' => 'Create:PeriodesModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            58 =>
            array(
                'id' => 59,
                'name' => 'Update:PeriodesModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            59 =>
            array(
                'id' => 60,
                'name' => 'Delete:PeriodesModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            60 =>
            array(
                'id' => 61,
                'name' => 'Restore:PeriodesModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            61 =>
            array(
                'id' => 62,
                'name' => 'ForceDelete:PeriodesModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            62 =>
            array(
                'id' => 63,
                'name' => 'ForceDeleteAny:PeriodesModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            63 =>
            array(
                'id' => 64,
                'name' => 'RestoreAny:PeriodesModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            64 =>
            array(
                'id' => 65,
                'name' => 'Replicate:PeriodesModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            65 =>
            array(
                'id' => 66,
                'name' => 'Reorder:PeriodesModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            66 =>
            array(
                'id' => 67,
                'name' => 'ViewAny:Post',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            67 =>
            array(
                'id' => 68,
                'name' => 'View:Post',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            68 =>
            array(
                'id' => 69,
                'name' => 'Create:Post',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            69 =>
            array(
                'id' => 70,
                'name' => 'Update:Post',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            70 =>
            array(
                'id' => 71,
                'name' => 'Delete:Post',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            71 =>
            array(
                'id' => 72,
                'name' => 'Restore:Post',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            72 =>
            array(
                'id' => 73,
                'name' => 'ForceDelete:Post',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            73 =>
            array(
                'id' => 74,
                'name' => 'ForceDeleteAny:Post',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            74 =>
            array(
                'id' => 75,
                'name' => 'RestoreAny:Post',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            75 =>
            array(
                'id' => 76,
                'name' => 'Replicate:Post',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            76 =>
            array(
                'id' => 77,
                'name' => 'Reorder:Post',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            77 =>
            array(
                'id' => 78,
                'name' => 'ViewAny:Role',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            78 =>
            array(
                'id' => 79,
                'name' => 'View:Role',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            79 =>
            array(
                'id' => 80,
                'name' => 'Create:Role',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            80 =>
            array(
                'id' => 81,
                'name' => 'Update:Role',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            81 =>
            array(
                'id' => 82,
                'name' => 'Delete:Role',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            82 =>
            array(
                'id' => 83,
                'name' => 'Restore:Role',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            83 =>
            array(
                'id' => 84,
                'name' => 'ForceDelete:Role',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            84 =>
            array(
                'id' => 85,
                'name' => 'ForceDeleteAny:Role',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            85 =>
            array(
                'id' => 86,
                'name' => 'RestoreAny:Role',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:38',
                'updated_at' => '2026-02-26 01:58:38',
            ),
            86 =>
            array(
                'id' => 87,
                'name' => 'Replicate:Role',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            87 =>
            array(
                'id' => 88,
                'name' => 'Reorder:Role',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            88 =>
            array(
                'id' => 89,
                'name' => 'ViewAny:StudentHasClassModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            89 =>
            array(
                'id' => 90,
                'name' => 'View:StudentHasClassModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            90 =>
            array(
                'id' => 91,
                'name' => 'Create:StudentHasClassModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            91 =>
            array(
                'id' => 92,
                'name' => 'Update:StudentHasClassModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            92 =>
            array(
                'id' => 93,
                'name' => 'Delete:StudentHasClassModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            93 =>
            array(
                'id' => 94,
                'name' => 'Restore:StudentHasClassModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            94 =>
            array(
                'id' => 95,
                'name' => 'ForceDelete:StudentHasClassModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            95 =>
            array(
                'id' => 96,
                'name' => 'ForceDeleteAny:StudentHasClassModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            96 =>
            array(
                'id' => 97,
                'name' => 'RestoreAny:StudentHasClassModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            97 =>
            array(
                'id' => 98,
                'name' => 'Replicate:StudentHasClassModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            98 =>
            array(
                'id' => 99,
                'name' => 'Reorder:StudentHasClassModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            99 =>
            array(
                'id' => 100,
                'name' => 'ViewAny:StudentsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            100 =>
            array(
                'id' => 101,
                'name' => 'View:StudentsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            101 =>
            array(
                'id' => 102,
                'name' => 'Create:StudentsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            102 =>
            array(
                'id' => 103,
                'name' => 'Update:StudentsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            103 =>
            array(
                'id' => 104,
                'name' => 'Delete:StudentsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            104 =>
            array(
                'id' => 105,
                'name' => 'Restore:StudentsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            105 =>
            array(
                'id' => 106,
                'name' => 'ForceDelete:StudentsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            106 =>
            array(
                'id' => 107,
                'name' => 'ForceDeleteAny:StudentsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            107 =>
            array(
                'id' => 108,
                'name' => 'RestoreAny:StudentsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            108 =>
            array(
                'id' => 109,
                'name' => 'Replicate:StudentsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            109 =>
            array(
                'id' => 110,
                'name' => 'Reorder:StudentsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            110 =>
            array(
                'id' => 111,
                'name' => 'ViewAny:SubjectsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            111 =>
            array(
                'id' => 112,
                'name' => 'View:SubjectsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            112 =>
            array(
                'id' => 113,
                'name' => 'Create:SubjectsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            113 =>
            array(
                'id' => 114,
                'name' => 'Update:SubjectsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            114 =>
            array(
                'id' => 115,
                'name' => 'Delete:SubjectsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            115 =>
            array(
                'id' => 116,
                'name' => 'Restore:SubjectsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            116 =>
            array(
                'id' => 117,
                'name' => 'ForceDelete:SubjectsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            117 =>
            array(
                'id' => 118,
                'name' => 'ForceDeleteAny:SubjectsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            118 =>
            array(
                'id' => 119,
                'name' => 'RestoreAny:SubjectsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            119 =>
            array(
                'id' => 120,
                'name' => 'Replicate:SubjectsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            120 =>
            array(
                'id' => 121,
                'name' => 'Reorder:SubjectsModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            121 =>
            array(
                'id' => 122,
                'name' => 'ViewAny:TeachersModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            122 =>
            array(
                'id' => 123,
                'name' => 'View:TeachersModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            123 =>
            array(
                'id' => 124,
                'name' => 'Create:TeachersModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            124 =>
            array(
                'id' => 125,
                'name' => 'Update:TeachersModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            125 =>
            array(
                'id' => 126,
                'name' => 'Delete:TeachersModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            126 =>
            array(
                'id' => 127,
                'name' => 'Restore:TeachersModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            127 =>
            array(
                'id' => 128,
                'name' => 'ForceDelete:TeachersModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            128 =>
            array(
                'id' => 129,
                'name' => 'ForceDeleteAny:TeachersModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            129 =>
            array(
                'id' => 130,
                'name' => 'RestoreAny:TeachersModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            130 =>
            array(
                'id' => 131,
                'name' => 'Replicate:TeachersModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            131 =>
            array(
                'id' => 132,
                'name' => 'Reorder:TeachersModel',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            132 =>
            array(
                'id' => 133,
                'name' => 'ViewAny:User',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            133 =>
            array(
                'id' => 134,
                'name' => 'View:User',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            134 =>
            array(
                'id' => 135,
                'name' => 'Create:User',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            135 =>
            array(
                'id' => 136,
                'name' => 'Update:User',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            136 =>
            array(
                'id' => 137,
                'name' => 'Delete:User',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            137 =>
            array(
                'id' => 138,
                'name' => 'Restore:User',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            138 =>
            array(
                'id' => 139,
                'name' => 'ForceDelete:User',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            139 =>
            array(
                'id' => 140,
                'name' => 'ForceDeleteAny:User',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            140 =>
            array(
                'id' => 141,
                'name' => 'RestoreAny:User',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            141 =>
            array(
                'id' => 142,
                'name' => 'Replicate:User',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            142 =>
            array(
                'id' => 143,
                'name' => 'Reorder:User',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            143 =>
            array(
                'id' => 144,
                'name' => 'View:Dashboard',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            144 =>
            array(
                'id' => 145,
                'name' => 'View:Home',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
            145 =>
            array(
                'id' => 146,
                'name' => 'View:Report',
                'guard_name' => 'web',
                'created_at' => '2026-02-26 01:58:39',
                'updated_at' => '2026-02-26 01:58:39',
            ),
        ));
    }
}
