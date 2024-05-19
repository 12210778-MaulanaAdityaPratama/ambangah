<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SuratUsahaModel;

class SuratUsahaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            // Batasi jumlah data yang akan dimasukkan
            $jumlahData = 10;
    
            // Generate data dummy
            $suratusaha = [];
            for ($i = 0; $i < $jumlahData; $i++) {
                $suratusaha[] = [
                    'nama' => 'Nama ' . ($i + 1),
                    'tempat_lahir' => 'Tempat Lahir ' . ($i + 1),
                    'tanggal_lahir' => now()->subYears(rand(18, 70))->subMonths(rand(0, 11))->subDays(rand(0, 30)),
                    'jenis_kelamin' => rand(0, 1) ? 'Laki-laki' : 'Perempuan',
                    'alamat' => 'Alamat ' . ($i + 1),
                    'pekerjaan' => 'Pekerjaan ' . ($i + 1),
                    'nik' => rand(1000000000000000, 9999999999999999),
                    'kewarganegaraan' => 'Kewarganegaraan ' . ($i + 1),
                    'nama_perusahaan' => 'Perusahaan ' . ($i + 1),
                    'alamat_perusahaan' => 'Alamat Perusahaan ' . ($i + 1),
                    'jenis_usaha' => 'Jenis Usaha ' . ($i + 1),
                    'keterangan' => 'Keterangan ' . ($i + 1),
                    'alasan' => 'Alasan ' . ($i + 1),
                    'id_users' => 1, // Ganti dengan id_users yang sesuai
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            };
    
            // Masukkan data pengguna ke dalam tabel users
            SuratUsahaModel::insert($suratusaha);
        }
    }
}
