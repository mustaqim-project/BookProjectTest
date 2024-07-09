<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Penulis;
use App\Models\Penerbit;
use Illuminate\Http\Request;

class DashBookController extends Controller
{
    public function index()
    {
        $bukus = Buku::with('kategori', 'penulis', 'penerbit')->get();
        $kategories = Kategori::all();
        $penulis = Penulis::all();
        $penerbits = Penerbit::all();
        return view('welcome', compact('bukus', 'kategories', 'penulis', 'penerbits'));
    }

    public function filterByKategori($id)
    {
        $bukus = Buku::with('kategori', 'penulis', 'penerbit')->where('kategori_id', $id)->get();
        $kategories = Kategori::all();
        $penulis = Penulis::all();
        $penerbits = Penerbit::all();
        return view('welcome', compact('bukus', 'kategories', 'penulis', 'penerbits'));
    }

    public function filterByPenulis($id)
    {
        $bukus = Buku::with('kategori', 'penulis', 'penerbit')->where('penulis_id', $id)->get();
        $kategories = Kategori::all();
        $penulis = Penulis::all();
        $penerbits = Penerbit::all();
        return view('welcome', compact('bukus', 'kategories', 'penulis', 'penerbits'));
    }

    public function filterByPenerbit($id)
    {
        $bukus = Buku::with('kategori', 'penulis', 'penerbit')->where('penerbit_id', $id)->get();
        $kategories = Kategori::all();
        $penulis = Penulis::all();
        $penerbits = Penerbit::all();
        return view('welcome', compact('bukus', 'kategories', 'penulis', 'penerbits'));
    }
}
