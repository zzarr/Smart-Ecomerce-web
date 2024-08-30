<?php

namespace App\Http\Controllers\Petani;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Db;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index()
    {

        $webtitle = 'Kategori';
        $kategori = DB::table('kategori')->get();
        return view('Petani.dashboard.kategori', compact('webtitle', 'kategori'));
    }

    public function add()
    {
        $webtitle = 'Kategori';
        return view('Petani.dashboard.kategori_add', compact('webtitle'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required',
        ]);

        $kategori = Kategori::create([
            'nama_kategori' => $request->nama_kategori,
        ]);

        return redirect()->route('kategori')->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $webtitle = 'Edit Kategori';
        $kategori = Kategori::findOrFail($id); // Find the category by ID, or fail with a 404 error
        return view('Petani.dashboard.kategori_edit', compact('webtitle', 'kategori'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kategori' => 'required',
        ]);

        $kategori = Kategori::findOrFail($id);
        $kategori->update([
            'nama_kategori' => $request->nama_kategori,
        ]);

        return redirect()->route('kategori')->with('success', 'Kategori berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        return redirect()->route('kategori')->with('success', 'Kategori berhasil dihapus.');
    }
}
