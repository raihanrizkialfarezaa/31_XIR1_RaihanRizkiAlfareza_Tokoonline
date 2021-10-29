<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\LigaSeeder;
use Database\Seeders\ProductSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        return $this->call([
            LigaSeeder::class,
            ProductSeeder::class,
        ]);
    }
}
