<?php
namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Penulis;
use App\Models\Penerbit;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::all();
        return view('admin.buku.index', compact('bukus'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        $penulis = Penulis::all();
        $penerbit = Penerbit::all();
        return view('admin.buku.create', compact('kategori', 'penulis', 'penerbit'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'kategori_id' => 'required',
            'penulis_id' => 'required',
            'penerbit_id' => 'required',
            'deskripsi' => 'nullable',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $fileName = time().'.'.$request->gambar->extension();
            $request->gambar->move(public_path('images'), $fileName);
            $data['gambar'] = $fileName;
        }

        Buku::create($data);

        return redirect()->route('buku.index')->with('success', 'Buku created successfully.');
    }

    public function show(Buku $buku)
    {
        return view('admin.buku.show', compact('buku'));
    }

    public function edit(Buku $buku)
    {
        $kategori = Kategori::all();
        $penulis = Penulis::all();
        $penerbit = Penerbit::all();
        return view('admin.buku.edit', compact('buku', 'kategori', 'penulis', 'penerbit'));
    }

    public function update(Request $request, Buku $buku)
    {
        $request->validate([
            'judul' => 'required',
            'kategori_id' => 'required',
            'penulis_id' => 'required',
            'penerbit_id' => 'required',
            'deskripsi' => 'nullable',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($buku->gambar) {
                File::delete(public_path('images').'/'.$buku->gambar);
            }

            $fileName = time().'.'.$request->gambar->extension();
            $request->gambar->move(public_path('images'), $fileName);
            $data['gambar'] = $fileName;
        }

        $buku->update($data);

        return redirect()->route('buku.index')->with('success', 'Buku updated successfully.');
    }

    public function destroy(Buku $buku)
    {
        // Hapus gambar terkait jika ada
        if ($buku->gambar) {
            File::delete(public_path('images').'/'.$buku->gambar);
        }

        $buku->delete();

        return redirect()->route('buku.index')->with('success', 'Buku deleted successfully.');
    }
}
