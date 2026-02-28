<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Adjacency;

class AdjacencySeeder extends Seeder
{
    public function run(): void
    {
        // Root
        Adjacency::create([
            'name' => 'Penilaian',
            'parent_id' => null,
        ]);
    }
}
