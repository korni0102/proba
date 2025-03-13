<?php

namespace Database\Seeders;

use App\Models\RowCategories;
use App\Models\Snippets;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use League\Csv\Reader;

class SnippetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $csvPath = storage_path('app/public/progyuj.csv');

        // Open the CSV file
        $csv = Reader::createFromPath($csvPath, 'r');
        $csv->setHeaderOffset(1); // Set the first row as header

        // Loop through CSV and insert data
        foreach ($csv as $record) {
            dump(array_key_exists('description',$record));
            dd($record);
            /*Snippets::create([
                'description' => $record['description'],
                'row' => $record['row'],
                'crispdm' => $record['crispdm'],
                'categories_id' => RowCategories::where('type', $record['row_categories'])->first()->id,
            ]);*/
        }
    }
}
