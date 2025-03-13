<?php

namespace Database\Seeders;

use App\Models\CodeCategories;
use App\Models\RowCategories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < 14; $i++) {
            RowCategories::create([
                'type' => $i
            ]);
        }
    }
}
