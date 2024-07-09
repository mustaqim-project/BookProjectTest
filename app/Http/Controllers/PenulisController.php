<?php
namespace App\Http\Controllers;

use App\Models\Penulis;
use Illuminate\Http\Request;

class PenulisController extends Controller
{
    public function index()
    {
        $penuliss = Penulis::all();
        return view('admin.penulis.index', compact('penuliss'));
    }

    public function create()
    {
        return view('admin.penulis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'biografi' => 'nullable'
        ]);

        Penulis::create($request->all());

        return redirect()->route('penulis.index')->with('success', 'Penulis created successfully.');
    }

    public function show(Penulis $penulis)
    {
        return view('admin.penulis.show', compact('penulis'));
    }

    public function edit(Penulis $penulis)
    {
        return view('admin.penulis.edit', compact('penulis'));
    }

    public function update(Request $request, Penulis $penulis)
    {
        $request->validate([
            'nama' => 'required',
            'biografi' => 'nullable'
        ]);

        $penulis->update($request->all());

        return redirect()->route('penulis.index')->with('success', 'Penulis updated successfully.');
    }

    public function destroy(Penulis $penulis)
    {
        $penulis->delete();

        return redirect()->route('penulis.index')->with('success', 'Penulis deleted successfully.');
    }
}
