<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'nama' => 'CHELSEA 3RD 2018-2019',
            'liga_id' => 2,
            'gambar' => 'chelsea.png'
        ]);
        Product::create([
            'nama' => 'LEICESTER CITY HOME 2018-2019',
            'liga_id' => 2,
            'gambar' => 'leicester.png'
        ]);
        Product::create([
            'nama' => 'MAN. UNITED AWAY 2018-2019',
            'liga_id' => 2,
            'gambar' => 'mu.png'
        ]);
        Product::create([
            'nama' => 'LIVERPOOL AWAY 2018-2019',
            'liga_id' => 2,
            'gambar' => 'liverpool.png'
        ]);
        Product::create([
            'nama' => 'DORTMUND AWAY 2018-2019',
            'liga_id' => 1,
            'gambar' => 'dortmund.png'
        ]);
        Product::create([
            'nama' => 'BAYERN MUNCHEN 3RD 2018 2019',
            'liga_id' => 1,
            'gambar' => 'munchen.png'
        ]);
        Product::create([
            'nama' => 'JUVENTUS AWAY 2018-2019',
            'liga_id' => 4,
            'gambar' => 'juve.png'
        ]);
        Product::create([
            'nama' => 'AS ROMA HOME 2018-2019',
            'liga_id' => 4,
            'gambar' => 'asroma.png'
        ]);
        Product::create([
            'nama' => 'AC MILAN HOME 2018 2019',
            'liga_id' => 4,
            'gambar' => 'acmilan.png'
        ]);
        Product::create([
            'nama' => 'LAZIO HOME 2018-2019',
            'liga_id' => 4,
            'gambar' => 'lazio.png'
        ]);
        Product::create([
            'nama' => 'REAL MADRID 3RD 2018-2019',
            'liga_id' => 3,
            'gambar' => 'madrid.png'
        ]);
        Product::create([
            'nama' => 'TOTTENHAM 3RD 2018-2019',
            'liga_id' => 2,
            'gambar' => 'tottenham.png'
        ]);
    }
}
