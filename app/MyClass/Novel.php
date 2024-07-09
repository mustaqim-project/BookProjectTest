<?php

namespace App\Myclass;

class Novel
{


    protected $judul;
    protected $penulis;

    Public function getJudul(){
        return $this->judul;
    }

    Public function setJudul($judul){
        $this->judul = $judul;
    }

    Public function getPenulis(){
        return $this->penulis;
    }

    Public function setPenulis($penulis){
        $this->penulis = $penulis;
    }


    Public function greeting(){

    return "Selamat datang di toko buku agung, kami menyediakan buku ($this->judul), karya ($this->penulis)";

    }


}
