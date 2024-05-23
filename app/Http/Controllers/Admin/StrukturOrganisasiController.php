<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StrukturOrganisasiModel;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class StrukturOrganisasiController extends Controller
{
    public function index()
    {
        $struktur = StrukturOrganisasiModel::all();
        return view('admin.struktur.index', compact('struktur'));
    }

    public function create()
    {
        return view('admin.struktur.create');
    }

    public function store(Request $request)
    {
        $messages = [
            'nama.required' => 'Nama wajib diisi.',
            'nip.required' => 'NIP wajib diisi.',
            'jabatan.required' => 'Jabatan wajib diisi.',
            'tugas.required' => 'Tugas wajib diisi.',
            'foto.required' => 'Foto wajib diunggah.',
            'foto.image' => 'File harus berupa gambar.',
            'foto.mimes' => 'Gambar harus berformat: jpeg, png, jpg, gif.',
            'foto.max' => 'Ukuran gambar tidak boleh lebih dari 2048 kilobytes.',
        ];
    
        $validatedData = $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'jabatan' => 'required',
            'tugas' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], $messages);
    
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = time() . '_' . $file->getClientOriginalName();
    
            // Resize the image
            $image = Image::make($file->getRealPath());
            $image->resize(1600, 1200, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
    
            // Save the resized image to the storage
            $image->save(storage_path('app/public/struktur/' . $fileName));
            
            $validatedData['foto'] = $fileName;
        }
    
        StrukturOrganisasiModel::create($validatedData);
        return redirect()->route('struktur.index')->with('success', 'Struktur Berhasil Ditambahkan!');
    }
    
    public function edit(StrukturOrganisasiModel $struktur)
    {
        return view('admin.struktur.edit', compact('struktur'));
    }

    public function update(Request $request, StrukturOrganisasiModel $struktur)
    {
        $messages = [
            'nama.required' => 'Nama wajib diisi.',
            'nip.required' => 'NIP wajib diisi.',
            'jabatan.required' => 'Jabatan wajib diisi.',
            'tugas.required' => 'Tugas wajib diisi.',
            'foto.mimes' => 'Gambar harus berformat: jpeg, png, jpg, gif.',
            'foto.max' => 'Ukuran gambar tidak boleh lebih dari 2048 kilobytes.',
        ];

        $validatedData = $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'jabatan' => 'required',
            'tugas' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], $messages);
    
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = time() . '_' . $file->getClientOriginalName();
    
            // Resize the image
            $image = Image::make($file->getRealPath());
            $image->resize(1600, 1200, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
    
            // Save the resized image to the storage
            $image->save(storage_path('app/public/struktur/' . $fileName));
            
            $validatedData['foto'] = $fileName;
        } else {
            unset($validatedData['foto']);
        }
    
        $struktur->update($validatedData);
        return redirect()->route('struktur.index')->with('success', 'Struktur Berhasil Diperbarui!');
    }
    
    public function destroy(StrukturOrganisasiModel $struktur)
    {
        $struktur->delete();
        return redirect()->route('struktur.index')->with('success', 'Struktur Berhasil Dihapus!');
    }
}
