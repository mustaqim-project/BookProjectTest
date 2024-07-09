<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    public function run()
    {
        DB::table('bukus')->insert([
            [
                'id' => 1,
                'gambar' => '1720518353.png',
                'judul' => 'Murder on the Orient Express',
                'kategori_id' => 1,
                'penulis_id' => 1,
                'penerbit_id' => 1,
                'deskripsi' => '<p>Novel misteri tentang pembunuhan di kereta api.</p>',
                'tanggal_terbit' => '1934-01-01',
                'created_at' => '2024-07-09 09:15:16',
                'updated_at' => '2024-07-09 02:45:54',
            ],
            [
                'id' => 2,
                'gambar' => '1720518689.jpg',
                'judul' => 'Harry Potter and the Philosopher\'s Stone',
                'kategori_id' => 1,
                'penulis_id' => 2,
                'penerbit_id' => 2,
                'deskripsi' => '<p>Novel fantasi tentang penyihir muda.</p>',
                'tanggal_terbit' => '1997-06-26',
                'created_at' => '2024-07-09 09:15:16',
                'updated_at' => '2024-07-09 02:51:29',
            ],
            [
                'id' => 3,
                'gambar' => '1720518722.jpg',
                'judul' => '1984',
                'kategori_id' => 3,
                'penulis_id' => 3,
                'penerbit_id' => 3,
                'deskripsi' => '<p>Novel distopia tentang pengawasan totaliter.</p>',
                'tanggal_terbit' => '1949-06-08',
                'created_at' => '2024-07-09 09:15:16',
                'updated_at' => '2024-07-09 02:52:02',
            ],
            [
                'id' => 4,
                'gambar' => '1720518910.jpg',
                'judul' => 'The Lord of the Rings',
                'kategori_id' => 1,
                'penulis_id' => 4,
                'penerbit_id' => 4,
                'deskripsi' => '<p>Trilogi fantasi epik tentang pencarian cincin.</p>',
                'tanggal_terbit' => '1954-07-29',
                'created_at' => '2024-07-09 09:15:16',
                'updated_at' => '2024-07-09 02:55:10',
            ],
            [
                'id' => 5,
                'gambar' => '1720518963.jpg',
                'judul' => 'Kafka on the Shore',
                'kategori_id' => 1,
                'penulis_id' => 5,
                'penerbit_id' => 5,
                'deskripsi' => '<p>Novel surreal tentang perjalanan dua karakter.</p>',
                'tanggal_terbit' => '2002-09-12',
                'created_at' => '2024-07-09 09:15:16',
                'updated_at' => '2024-07-09 02:56:03',
            ],
            [
                'id' => 6,
                'gambar' => '1720519003.jpg',
                'judul' => 'The Da Vinci Code',
                'kategori_id' => 1,
                'penulis_id' => 6,
                'penerbit_id' => 6,
                'deskripsi' => '<p>Novel thriller tentang konspirasi di balik karya seni.</p>',
                'tanggal_terbit' => '2003-03-18',
                'created_at' => '2024-07-09 09:15:16',
                'updated_at' => '2024-07-09 02:56:43',
            ],
            [
                'id' => 7,
                'gambar' => '1720519097.jpg',
                'judul' => 'Adventures of Huckleberry Finn',
                'kategori_id' => 1,
                'penulis_id' => 7,
                'penerbit_id' => 7,
                'deskripsi' => '<p>Novel klasik tentang petualangan di sungai Mississippi.</p>',
                'tanggal_terbit' => '1884-12-10',
                'created_at' => '2024-07-09 09:15:16',
                'updated_at' => '2024-07-09 02:58:17',
            ],
            [
                'id' => 8,
                'gambar' => '1720519136.jpg',
                'judul' => 'Pride and Prejudice',
                'kategori_id' => 1,
                'penulis_id' => 8,
                'penerbit_id' => 8,
                'deskripsi' => '<p>Novel roman tentang cinta dan kesalahpahaman.</p>',
                'tanggal_terbit' => '1813-01-28',
                'created_at' => '2024-07-09 09:15:16',
                'updated_at' => '2024-07-09 02:58:56',
            ],
            [
                'id' => 9,
                'gambar' => '1720519172.jpg',
                'judul' => 'The Old Man and the Sea',
                'kategori_id' => 1,
                'penulis_id' => 9,
                'penerbit_id' => 9,
                'deskripsi' => '<p>Novel tentang perjuangan seorang nelayan tua.</p>',
                'tanggal_terbit' => '1952-09-01',
                'created_at' => '2024-07-09 09:15:16',
                'updated_at' => '2024-07-09 02:59:32',
            ],
            [
                'id' => 10,
                'gambar' => '1720519205.jpg',
                'judul' => 'The Great Gatsby',
                'kategori_id' => 1,
                'penulis_id' => 10,
                'penerbit_id' => 10,
                'deskripsi' => '<p>Novel tentang kegemerlapan dan kesepian di era Jazz.</p>',
                'tanggal_terbit' => '1925-04-10',
                'created_at' => '2024-07-09 09:15:16',
                'updated_at' => '2024-07-09 03:00:05',
            ],
        ]);
    }
}

