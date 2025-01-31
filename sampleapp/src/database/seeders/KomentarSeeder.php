<?php

namespace Database\Seeders;

use App\Models\Komentar;
use Illuminate\Database\Seeder;

class KomentarSeeder extends Seeder
{
    public function run()
    {
        Komentar::create([
            'id_karya' => 1,
            'id_pengguna' => 1,
            'isi_komentar' => 'Lukisan ini sangat menginspirasi!',
        ]);

        Komentar::create([
            'id_karya' => 2,
            'id_pengguna' => 1,
            'isi_komentar' => 'Desain yang sangat kreatif!',
        ]);
    }
}