<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SuratUsahaModel;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;

class SuratUsahaController extends Controller
{
    public function index()
    {
        // Mengambil data SKTM yang terkait dengan pengguna yang sedang login
   $user = auth()->user();
   if ($user->role === 'admin') {
       // Jika pengguna adalah admin, tampilkan semua data SKTM
       $suratusaha = SuratUsahaModel::with('user')->get();
   } else {
       // Jika bukan admin, hanya tampilkan data SKTM yang dibuat oleh pengguna yang sedang login
       $suratusaha = SuratUsahaModel::with('user')->where('id_users', $user->id)->get();
   }
        return view('admin.suratusaha.index', compact('suratusaha'));
    }
    public function suratusaha()
    {
        return view('suratusaha.suratusaha');
    }
    public function view()
    {
        $user = auth()->user();
        if ($user->role === 'admin') {
            // Jika pengguna adalah admin, tampilkan semua data SKTM
            $suratusaha = SuratUsahaModel::with('user')->get();
        } else {
            // Jika bukan admin, hanya tampilkan data SKTM yang dibuat oleh pengguna yang sedang login
            $suratusaha = SuratUsahaModel::with('user')->where('id_users', $user->id)->get();
        }
        return view('suratusaha.view', compact('suratusaha'));
    }
    public function create()
    {
        return view('admin.suratusaha.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'nik' => 'required',
            'kewarganegaraan' => 'required',
            'nama_perusahaan' => 'required',
            'alamat_perusahaan' => 'required',
            'jenis_usaha' => 'required',
            'keterangan' => 'required',
            'alasan' => 'required',
        
        ]);
       
        try {
            $validatedData['id_users'] = auth()->user()->id;
        
            // Assuming you have a 'role' field in your user model
            $userRole = auth()->user()->role;
        
            // Redirect based on user role
            if ($userRole === 'warga') {
                SuratUsahaModel::create($validatedData);
                return redirect()->route('suratusaha.view')->with('success', 'Surat Usaha Berhasil Ditambahkan!');
            } elseif ($userRole === 'admin') {
                SuratUsahaModel::create($validatedData);
                return redirect()->route('suratusaha.index')->with('success', 'Surat Usaha Berhasil Ditambahkan!');
            } else {
                // Handle other roles if needed
                // For example, redirect them to a default route
                return redirect()->route('default.route')->with('error', 'Peran pengguna tidak valid');
            }
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }

    public function edit(SuratUsahaModel $suratusaha)
    {
        return view('admin.suratusaha.edit', compact('suratusaha'));
    }

    public function update(Request $request, SuratUsahaModel $suratusaha)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'nik' => 'required',
            'kewarganegaraan' => 'required',
            'nama_perusahaan' => 'required',
            'alamat_perusahaan' => 'required',
            'jenis_usaha' => 'required',
            'keterangan' => 'required',
            'alasan' => 'required',
        ]);
    
      
    
        $suratusaha->update($validatedData);
        return redirect()->route('suratusaha.index')->with('success', 'Surat Usaha Berhasil Diperbarui!');
    }
    

    public function destroy(SuratUsahaModel $suratusaha)
    {
        $suratusaha->delete();
        return redirect()->route('suratusaha.index')->with('success', 'Surat Usaha Berhasil Dihapus!');
    }
    public function downloadPDF($id)
{
    $suratusaha = SuratUsahaModel::find($id);

    // Render view blade ke dalam HTML
    $html = view('suratusaha.suratusaha_download', compact('suratusaha'))->render();

    // Konfigurasi Dompdf
    $options = new Options();
    $options->set('isHtml5ParserEnabled', true);
    $options->set('isRemoteEnabled', true);

    // Membuat objek Dompdf
    $dompdf = new Dompdf($options);

    // Memuat HTML ke Dompdf
    $dompdf->loadHtml($html);

    // (Opsional) Membuat ukuran dan orientasi kertas
    $dompdf->setPaper('A4', 'portrait');

    // Render PDF
    $dompdf->render();

    // Menyimpan atau mengirim PDF ke browser
    return $dompdf->stream("Surat_Usaha.pdf");
}
public function contohsurat() {
    return view('suratusaha.suratusaha_download');
}
}
