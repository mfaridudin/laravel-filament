<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolesTableSeeder::class);
        $this->call(ClassroomsTableSeeder::class);
        $this->call(SubjectsTableSeeder::class); 
        $this->call(PermissionsTableSeeder::class);
        $this->call(RoleHasPermissionsTableSeeder::class);
        $this->call(AdjacencySeeder::class);
        $this->call(ClassroomSubjectTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(PeriodesTableSeeder::class);
        $this->call(CategoryNilaisTableSeeder::class);
        $this->call(NilaisTableSeeder::class);
        $this->call(StudentHasClassTableSeeder::class);
    }
}
