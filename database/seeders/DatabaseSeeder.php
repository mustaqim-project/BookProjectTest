<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            KategoriSeeder::class,
            PenulisSeeder::class,
            PenerbitSeeder::class,
            BukuSeeder::class,
        ]);
    }
}
