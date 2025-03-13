<?php

namespace Database\Seeders;

use App\Models\CodeCategories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CodeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 1; $i++) {
            CodeCategories::create([
                'type' => 1
            ]);
        }
    }
}
