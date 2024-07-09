<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = [
        'gambar',
        'judul',
        'kategori_id',
        'penulis_id',
        'penerbit_id',
        'deskripsi',
        'tanggal_terbit'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function penulis()
    {
        return $this->belongsTo(Penulis::class);
    }

    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class);
    }
}
