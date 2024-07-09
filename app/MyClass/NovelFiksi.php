<?php

namespace App\MyClass;
use App\MyClass\Novel;

class NovelFiksi extends Novel
{
    

    public function greeting()
    {
        return "Novel Fiksi: " . $this->judul . " ditulis oleh " . $this->penulis;
    }
}