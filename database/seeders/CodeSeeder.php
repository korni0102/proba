<?php

namespace Database\Seeders;

use App\Models\Codes;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;

class CodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 5; $i++) {
            Codes::create([
                'user_id' => 1,
                'code_category_id' => 1,
                'approved' => $i % 2 == 0,
            ]);
        }
    }
}
