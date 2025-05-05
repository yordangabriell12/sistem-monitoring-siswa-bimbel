<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\ArticleSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Memanggil seeder untuk artikel
        $this->call([
            ArticleSeeder::class,
        ]);
    }
}
