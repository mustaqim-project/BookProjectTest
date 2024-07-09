<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\MyClass\Sejarah;
use App\MyClass\NovelFiksi;

class ShowBookData extends Command
{
    protected $signature = 'book:data';

    protected $description = 'Tampilkan 3 data dalam command raw json ';

    public function handle()
    {

        $BukuSejarah = [
            ['judul' => 'Sejarah Perang Dunia 2', 'penulis' => 'Agung Mustaqim'],
            ['judul' => 'Sejarah Perang Indonesia', 'penulis' => 'Agung Mustaqim'],
            ['judul' => 'Sejarah Proklamasi 17 Agustus 1945', 'penulis' => 'Agung Mustaqim']
        ];

        $BookNovelFiksi = [
            ['judul' => 'Harry Potter', 'penulis' => 'Agung Mustaqim'],
            ['judul' => 'Lord Of The Rings 1', 'penulis' => 'Agung Mustaqim'],
            ['judul' => 'Lord Of The Rings 2', 'penulis' => 'Agung Mustaqim']
        ];

        $RowDataSejarah =[];
        foreach ($BukuSejarah as $Buku) {
            $sejarah = new Sejarah();
            $sejarah->setJudul($Buku['judul']);
            $sejarah->setPenulis($Buku['penulis']);
            $RowDataSejarah[]= [
                'judul'=>$sejarah->getJudul(),
                'penulis'=>$sejarah->getPenulis(),
                'greeting'=>$sejarah->greeting()

            ];
        }

        $RowDataNovel = [];
        foreach ($BookNovelFiksi as $Buku) {
            $novelFiksi = new NovelFiksi();
            $novelFiksi->setJudul($Buku['judul']);
            $novelFiksi->setPenulis($Buku['penulis']);
            $RowDataNovel[]= [
                'judul'=>$novelFiksi->getJudul(),
                'penulis'=>$novelFiksi->getPenulis(),
                'greeting'=>$novelFiksi->greeting()

            ];
        }

        $jsonData = [
            'Sejarah' => $RowDataSejarah,
            'NovelFiksi' => $RowDataNovel,
        ];

        $this->line(json_encode($jsonData, JSON_PRETTY_PRINT));
    }
}


