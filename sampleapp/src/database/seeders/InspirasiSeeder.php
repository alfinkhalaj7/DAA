<?php

namespace Database\Seeders;

use App\Models\Inspirasi;
use Illuminate\Database\Seeder;

class InspirasiSeeder extends Seeder
{
    public function run()
    {
        Inspirasi::create([
            'isi_inspirasi' => 'Menggambar dengan warna-warna cerah dapat menciptakan suasana yang lebih hidup.',
        ]);

        Inspirasi::create([
            'isi_inspirasi' => 'Desain grafis digital dapat mengubah ide menjadi karya yang luar biasa.',
        ]);
    }
}