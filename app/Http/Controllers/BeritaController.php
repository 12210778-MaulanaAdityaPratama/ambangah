<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BeritaModel;
use Carbon\Carbon;
class BeritaController extends Controller
{
    public function index(Request $request) {
        $berita = BeritaModel::all();
        $query = BeritaModel::with('user');
         // Mengambil 5 berita terbaru
         $recentPosts = BeritaModel::orderBy('created_at', 'desc')->take(5)->get();
        $berita = BeritaModel::with('user')->paginate(3);
        $berita = $query->paginate(3);
        return view('berita', compact('berita','recentPosts'));
    }
    public function show($id) {
        $berita = BeritaModel::findOrFail($id);
        return view('berita_detail', compact('berita'));
    }
}
