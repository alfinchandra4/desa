<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\KategoriPotensidesa;

class KategoriPotensidesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'UMKM'],
            ['name' => 'Wisata'],
            ['name' => 'Guest House'],
            ['name' => 'Seni Budaya']

        ];

        DB::table('kategori_potensi_desa')->insert($data);
    }
}
