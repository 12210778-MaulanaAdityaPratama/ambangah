<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BeritaModel;
class BeritaController extends Controller
{
    public function index() {
        $berita = BeritaModel::all();
        return view('berita', compact('berita'));
    }
    public function show($id) {
        $berita = BeritaModel::findOrFail($id);
        return view('berita_detail', compact('berita'));
    }
}
