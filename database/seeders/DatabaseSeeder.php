<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name'     => 'John Doe',
            'email'    => 'johndoe@example.com',
            'password' => bcrypt('password'),
        ]);

        $this->call([
            CategorySeeder::class,
            SnippetsSeeder::class,
            CodeCategorySeeder::class,
            CodeSeeder::class,

        ]);
    }
}
