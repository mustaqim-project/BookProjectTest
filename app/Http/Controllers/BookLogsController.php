<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\MyClass\Sejarah;
use App\MyClass\NovelFiksi;

class BookLogsController extends Controller
{
    public function logGreeting()
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
            Log::info($sejarah->greeting());
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
            Log::info($novelFiksi->greeting());
            $RowDataNovel[]= [
                'judul'=>$novelFiksi->getJudul(),
                'penulis'=>$novelFiksi->getPenulis(),
                'greeting'=>$novelFiksi->greeting()

            ];
        }

        return response()->json([
            'Sejarah'=>$RowDataSejarah,
            'NovelFIksi'=>$RowDataNovel,
    ]);
    }
}
