<?php

namespace App\Http\Controllers\Petani;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Garapan;
use App\Models\Kategori;
use Illuminate\Support\Facades\Auth;


class GarapanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $webtitle = 'Garapan';
        $garapan = Garapan::all();
        return view('Petani.dashboard.garapan', compact('webtitle', 'garapan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $webtitle = 'Garapan';
        $kategori = Kategori::all();
        return view('Petani.dashboard.garapan_add', compact('webtitle', 'kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang dikirim melalui form
        $request->validate([
            'nama_tanaman' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga_per_unit' => 'required|numeric',
            'tanggal_tanam' => 'required|date',
            'tanggal_panen' => 'required|date|after:tanggl_tanam',

            'kategori_id' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Ambil ID petani dari user yang sedang login
        $user = auth()->user();

        $petani =  $user->petani;

        if ($petani) {
            $petaniId = $petani->id;
            // Proses upload foto
            if ($request->hasFile('photo')) {
                $photoName = '/images/HasilTani/' . $request->nama_tanaman . '.' . $request->photo->extension();
                $request->photo->move(public_path('images/HasilTani'), $photoName);
            } else {
                $photoName = null; // Jika tidak ada foto yang diupload
            }

            // Buat record baru di database
            Garapan::create([
                'petani_id' => $petaniId,
                'nama_tanaman' => $request->nama_tanaman,
                'deskripsi' => $request->deskripsi,
                'harga_per_unit' => $request->harga_per_unit,
                'tanggal_tanam' => $request->tanggal_tanam,
                'tanggal_panen' => $request->tanggal_panen,

                'kategori_id' =>  $request->kategori_id,
                'photo' => $photoName,
            ]);

            return redirect()->route('garapan')->with('success', 'Garapan berhasil ditambahkan.');
        } else {
            return redirect()->back()->with('error', 'You are not registered as a petani.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
