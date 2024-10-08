<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pemain')->insert([
            ['nama_pemain' => 'Bruno Fernandes', 'no_punggung' => 8, 'posisi' => 'Midfielder'],
            ['nama_pemain' => 'Marcus Rashford', 'no_punggung' => 10, 'posisi' => 'Forward'],
            ['nama_pemain' => 'Raphaël Varane', 'no_punggung' => 19, 'posisi' => 'Defender'],
            ['nama_pemain' => 'Casemiro', 'no_punggung' => 18, 'posisi' => 'Midfielder'],
            ['nama_pemain' => 'David de Gea', 'no_punggung' => 1, 'posisi' => 'Goalkeeper']
        ]);
    }
}
