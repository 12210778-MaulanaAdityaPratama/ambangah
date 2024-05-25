<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BeritaModel;
class BeritaDesaController extends Controller
{
    public function index()
    {
        $berita = BeritaModel::with('user')->paginate(5);
        return view('admin.berita.index', compact('berita'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Contoh validasi foto
        
        ]);
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = $file->getClientOriginalName(); // atau sesuai format yang Anda inginkan
            $file->storeAs('public/berita', $fileName); // Ganti dengan path dan nama direktori yang sesuai
            $validatedData['foto'] = $fileName;
        }
        $validatedData['user_id'] = auth()->user()->id;

        
     

        BeritaModel::create($validatedData);
        return redirect()->route('berita.index')->with('success', 'Berita Berhasil Ditambahkan!');
    }

    public function edit(BeritaModel $berita)
    {
        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, BeritaModel $berita)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Jadikan foto opsional
        ]);
    
        // Menghapus validasi yang memaksa foto harus diunggah setiap kali
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = $file->getClientOriginalName(); // atau sesuai format yang Anda inginkan
            $file->storeAs('public/berita', $fileName); // Ganti dengan path dan nama direktori yang sesuai
            $validatedData['foto'] = $fileName;
        } else {
            unset($validatedData['foto']); // Jika tidak ada file foto yang diunggah, hapus key 'foto' dari data yang divalidasi
        }
    
        $berita->update($validatedData);
        return redirect()->route('berita.index')->with('success', 'Berita Berhasil Diperbarui!');
    }
    

    public function destroy(BeritaModel $berita)
    {
        $berita->delete();
        return redirect()->route('berita.index')->with('success', 'Berita Berhasil Dihapus!');
    }
}
