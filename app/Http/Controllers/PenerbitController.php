<?php
namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    public function index()
    {
        $penerbits = Penerbit::all();
        return view('admin.penerbit.index', compact('penerbits'));
    }

    public function create()
    {
        return view('admin.penerbit.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'nullable'
        ]);

        Penerbit::create($request->all());

        return redirect()->route('penerbit.index')->with('success', 'Penerbit created successfully.');
    }

    public function show(Penerbit $penerbit)
    {
        return view('admin.penerbit.show', compact('penerbit'));
    }

    public function edit(Penerbit $penerbit)
    {
        return view('admin.penerbit.edit', compact('penerbit'));
    }

    public function update(Request $request, Penerbit $penerbit)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'nullable'
        ]);

        $penerbit->update($request->all());

        return redirect()->route('penerbit.index')->with('success', 'Penerbit updated successfully.');
    }

    public function destroy(Penerbit $penerbit)
    {
        $penerbit->delete();

        return redirect()->route('penerbit.index')->with('success', 'Penerbit deleted successfully.');
    }
}
