<?php

namespace App\MyClass;
use App\MyClass\Novel;
class Sejarah extends Novel
{

    public function greeting()
    {
        return "Buku Sejarah: " . $this->judul . " ditulis oleh " . $this->penulis;
    }
}