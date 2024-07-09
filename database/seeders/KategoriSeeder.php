<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        DB::table('kategoris')->insert([
            ['id' => 1, 'nama' => 'Fiksi', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'nama' => 'Non-Fiksi', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'nama' => 'Sejarah', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'nama' => 'Biografi', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'nama' => 'Sains', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'nama' => 'Teknologi', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'nama' => 'Kesehatan', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'nama' => 'Psikologi', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'nama' => 'Filsafat', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'nama' => 'Ekonomi', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
