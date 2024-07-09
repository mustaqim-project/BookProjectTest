<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    public function run()
    {
        DB::table('bukus')->insert([
            ['id' => 1, 'gambar' => 'gambar1.jpg', 'judul' => 'Murder on the Orient Express', 'kategori_id' => 1, 'penulis_id' => 1, 'penerbit_id' => 1, 'deskripsi' => 'Novel misteri tentang pembunuhan di kereta api.', 'tanggal_terbit' => '1934-01-01', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'gambar' => 'gambar2.jpg', 'judul' => 'Harry Potter and the Philosopher\'s Stone', 'kategori_id' => 1, 'penulis_id' => 2, 'penerbit_id' => 2, 'deskripsi' => 'Novel fantasi tentang penyihir muda.', 'tanggal_terbit' => '1997-06-26', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'gambar' => 'gambar3.jpg', 'judul' => '1984', 'kategori_id' => 3, 'penulis_id' => 3, 'penerbit_id' => 3, 'deskripsi' => 'Novel distopia tentang pengawasan totaliter.', 'tanggal_terbit' => '1949-06-08', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'gambar' => 'gambar4.jpg', 'judul' => 'The Lord of the Rings', 'kategori_id' => 1, 'penulis_id' => 4, 'penerbit_id' => 4, 'deskripsi' => 'Trilogi fantasi epik tentang pencarian cincin.', 'tanggal_terbit' => '1954-07-29', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'gambar' => 'gambar5.jpg', 'judul' => 'Kafka on the Shore', 'kategori_id' => 1, 'penulis_id' => 5, 'penerbit_id' => 5, 'deskripsi' => 'Novel surreal tentang perjalanan dua karakter.', 'tanggal_terbit' => '2002-09-12', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'gambar' => 'gambar6.jpg', 'judul' => 'The Da Vinci Code', 'kategori_id' => 1, 'penulis_id' => 6, 'penerbit_id' => 6, 'deskripsi' => 'Novel thriller tentang konspirasi di balik karya seni.', 'tanggal_terbit' => '2003-03-18', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'gambar' => 'gambar7.jpg', 'judul' => 'Adventures of Huckleberry Finn', 'kategori_id' => 1, 'penulis_id' => 7, 'penerbit_id' => 7, 'deskripsi' => 'Novel klasik tentang petualangan di sungai Mississippi.', 'tanggal_terbit' => '1884-12-10', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'gambar' => 'gambar8.jpg', 'judul' => 'Pride and Prejudice', 'kategori_id' => 1, 'penulis_id' => 8, 'penerbit_id' => 8, 'deskripsi' => 'Novel roman tentang cinta dan kesalahpahaman.', 'tanggal_terbit' => '1813-01-28', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'gambar' => 'gambar9.jpg', 'judul' => 'The Old Man and the Sea', 'kategori_id' => 1, 'penulis_id' => 9, 'penerbit_id' => 9, 'deskripsi' => 'Novel tentang perjuangan seorang nelayan tua.', 'tanggal_terbit' => '1952-09-01', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'gambar' => 'gambar10.jpg', 'judul' => 'The Great Gatsby', 'kategori_id' => 1, 'penulis_id' => 10, 'penerbit_id' => 10, 'deskripsi' => 'Novel tentang kegemerlapan dan kesepian di era Jazz.', 'tanggal_terbit' => '1925-04-10', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
