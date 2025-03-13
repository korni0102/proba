<?php

namespace Database\Seeders;

use App\Models\RowCategories;
use App\Models\Snippets;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SnippetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvPath = storage_path('app/public/progyuj.csv');

        // Open the file for reading
        if (($handle = fopen($csvPath, 'r')) !== false) {
            // Skip the first line if it contains headers
            $headers = fgetcsv($handle, 1000, ';'); // Adjust delimiter as ';'

            // Read each row of the CSV
            while (($data = fgetcsv($handle, 1000, ';')) !== false) {
                // Access data from each column
                Snippets::create([
                    'description' => $data[1],
                    'row' => $data[2],
                    'category_id' => RowCategories::where('type', $data[3])->first()->id,
                    'crispdm' => $data[4],
                ]);
            }

            // Close the file once done
            fclose($handle);
        }
    }
}
