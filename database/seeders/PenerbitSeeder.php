<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenerbitSeeder extends Seeder
{
    public function run()
    {
        DB::table('penerbits')->insert([
            ['id' => 1, 'nama' => 'Gramedia', 'alamat' => 'Jl. Palmerah Barat No.29, Jakarta', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'nama' => 'Erlangga', 'alamat' => 'Jl. H. Baping Raya No.100, Jakarta', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'nama' => 'Mizan', 'alamat' => 'Jl. Cinambo No.12, Bandung', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'nama' => 'Bentang Pustaka', 'alamat' => 'Jl. Gejayan No.3, Yogyakarta', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'nama' => 'Republika', 'alamat' => 'Jl. Warung Jati Barat No.9, Jakarta', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'nama' => 'Andi Publisher', 'alamat' => 'Jl. Beo No.38, Yogyakarta', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'nama' => 'Pustaka Al-Kautsar', 'alamat' => 'Jl. Tebet Timur Dalam No.42, Jakarta', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'nama' => 'Kanisius', 'alamat' => 'Jl. Cik Di Tiro No.34, Yogyakarta', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'nama' => 'PT. Dunia Pustaka Jaya', 'alamat' => 'Jl. Kramat Raya No.45, Jakarta', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'nama' => 'BIP', 'alamat' => 'Jl. Gunung Sahari No.56, Jakarta', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
