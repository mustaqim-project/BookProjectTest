<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenulisSeeder extends Seeder
{
    public function run()
    {
        DB::table('penulis')->insert([
            ['id' => 1, 'nama' => 'Agatha Christie', 'biografi' => 'Penulis novel misteri', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'nama' => 'J.K. Rowling', 'biografi' => 'Penulis seri Harry Potter', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'nama' => 'George Orwell', 'biografi' => 'Penulis novel distopia', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'nama' => 'J.R.R. Tolkien', 'biografi' => 'Penulis trilogi Lord of the Rings', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'nama' => 'Haruki Murakami', 'biografi' => 'Penulis novel Jepang kontemporer', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'nama' => 'Dan Brown', 'biografi' => 'Penulis novel thriller', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'nama' => 'Mark Twain', 'biografi' => 'Penulis klasik Amerika', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'nama' => 'Jane Austen', 'biografi' => 'Penulis novel roman Inggris', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'nama' => 'Ernest Hemingway', 'biografi' => 'Penulis novel dan cerita pendek', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'nama' => 'F. Scott Fitzgerald', 'biografi' => 'Penulis The Great Gatsby', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
