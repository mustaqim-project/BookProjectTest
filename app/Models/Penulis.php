<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'biografi'];

    public function bukus()
    {
        return $this->hasMany(Buku::class);
    }
}
