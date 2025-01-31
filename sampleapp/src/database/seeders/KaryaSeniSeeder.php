<?php

namespace Database\Seeders;

use App\Models\KaryaSeni;
use Illuminate\Database\Seeder;

class KaryaSeniSeeder extends Seeder
{
    public function run()
    {
        KaryaSeni::create([
            'judul' => 'Lukisan Alam',
            'id_pengguna' => 2,
            'kategori' => 'melukis',
            'file_karya' => 'karya1.jpg',
        ]);

        KaryaSeni::create([
            'judul' => 'Desain Grafis Digital',
            'id_pengguna' => 2,
            'kategori' => 'desain_grafis',
            'file_karya' => 'karya2.jpg',
        ]);
    }
}
