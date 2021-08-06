<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DemografiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'gender' => 'Laki - Laki',
                'count' => 0
            ], [
                'gender' => 'Perempuan',
                'count' => 0
            ]
        ];
        DB::table('populations')->insert($data);
    }
}
