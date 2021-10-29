<?php

namespace Database\Seeders;

use App\Models\Liga;
use Illuminate\Database\Seeder;

class LigaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Liga::create([
            'nama' => 'Bundes Liga',
        	'negara' => 'Jerman',
        	'gambar' => 'bundesliga.png',
        ]);
        Liga::create([
            'nama' => 'Premier League',
        	'negara' => 'Inggris',
        	'gambar' => 'premierleague.png',
        ]);
        Liga::create([
            'nama' => 'La Liga',
        	'negara' => 'Spanyol',
        	'gambar' => 'laliga.png',
        ]);
        Liga::create([
            'nama' => 'Serie A',
        	'negara' => 'Italia',
        	'gambar' => 'seriea.png',
        ]);

    }
}
