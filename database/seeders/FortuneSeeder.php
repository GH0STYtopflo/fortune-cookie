<?php

namespace Database\Seeders;

use App\Models\Fortune;
use Illuminate\Database\Seeder;

class FortuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        require __DIR__ . '/../../scripts/fortune_extractor.php';

        $factory = Fortune::factory();
        extractAndSeed($factory);
    }
}
