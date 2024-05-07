<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VisiMisiModel;

class VisiAdminController extends Controller
{
    public function index()
    {
        $visimisi = VisiMisiModel::all();
        return view('admin.visimisi.index', compact('visimisi'));
    }
    
    public function create()
    {
        return view('admin.visimisi.create');
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'visi' => 'required',
            'misi' => 'required',
        ]);
    
        VisiMisiModel::create($validatedData);
        return redirect()->route('visi-misi.index')->with('success', 'Visi Misi berhasil ditambahkan!');
    }
    
    public function edit(VisiMisiModel $visimisi)
    {
        return view('admin.visimisi.edit', compact('visimisi'));
    }
    
    public function update(Request $request, VisiMisiModel $visimisi)
    {
        $validatedData = $request->validate([
            'visi' => 'required',
            'misi' => 'required',
        ]);
    
        $visimisi->update($validatedData);
        return redirect()->route('visi-misi.index')->with('success', 'Visi Misi berhasil diperbarui!');
    }
    
    public function destroy(VisiMisiModel $visimisi)
    {
        $visimisi->delete();
        return redirect()->route('visi-misi.index')->with('success', 'Visi Misi berhasil dihapus!');
    }
}
