<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PendudukModel;

class AdminController extends Controller
{
    public function index() {
        $admin = PendudukModel::all();
        return view('admin.index', compact('admin'));
    }

    public function edit(PendudukModel $admin) {
        return view('admin.edit', compact('admin'));
    }
    public function update(Request $request, PendudukModel $admin) 
    {
        $validateData = $request->validate([
            'laki_laki' => 'required',
            'perempuan' => 'required',
            'balita' => 'required'
        ]);
        
        $admin->update($validateData);
        return redirect()->route('admin.index')->with('success', 'Data Penduduk Berhasil Di Perbarui');
    }
}
