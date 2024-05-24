@extends('template.main')

@section('content')
<section class="features">
    <div class="container">

      <div class="section-title">
        <h2>Pembuatan Surat Usaha</h2>
      </div>

<div class="row justify-content-center">
         <div class="container mt-5">
             <h2>Formulir</h2>
             <form action="{{route('suratusaha.store')}}" method="POST" class="forms-sample" enctype="multipart/form-data">
                @csrf
                {{-- Menampilkan pesan kesalahan --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" class="form-control p-input" rows="5">
                  </div>
                  <div class="form-group">
                      <label for="tempat_lahir">Tempat Lahir</label>
                      <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" class="form-control p-input">
                    </div>
                    <div class="form-group">
                      <label for="tanggal_lahir">Tanggal Lahir</label>
                      <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control p-input" rows="5" >
                    </div>
                    <div class="form-group">
                      <label for="jenis_kelamin">Jenis Kelamin</label>
                      <select name="jenis_kelamin" id="jenis_kelamin" class="form-control p-input">
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <textarea name="alamat" id="alamat" class="form-control p-input" placeholder="Alamat...." rows="5"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="pekerjaan">Pekerjaan</label>
                      <input type="text" name="pekerjaan" id="pekerjaan" class="form-control p-input" placeholder="Pekerjaan" rows="5">
                    </div>
                    <div class="form-group">
                      <label for="nik">NIK</label>
                      <input type="number" name="nik" id="nik" class="form-control p-input" placeholder="NIK" rows="5">
                    </div>
                    <div class="form-group">
                      <label for="kewarganegaraan">Kewarganegaraan</label>
                    <input type="text" name="kewarganegaraan" id="kewarganegaraan" class="form-control p-input" placeholder="Kewarganegaraan...." rows="5">
                    </div>
                    <div class="form-group">
                      <label for="agama">Agama</label>
                      <select name="agama" id="agama" class="form-control p-input">
                          <option value="Islam">Islam</option>
                          <option value="Khatolik">Khatolik</option>
                          <option value="Protestan">Protestan</option>
                          <option value="Buddha">Buddha</option>
                          <option value="Hindu">Hindu</option>
                          <option value="Konghucu">Konghucu</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="status_perkawinan">Status Perkawinan</label>
                    <select name="status_perkawinan" id="status_perkawinan" class="form-control p-input">
                        <option value="Menikah">Menikah</option>
                        <option value="Belum Menikah">Belum Menikah</option>
                        <option value="Cerai Hidup">Cerai Hidup</option>
                        <option value="Cerai Mati">Cerai Mati</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jenis_usaha">Jenis Usaha</label>
                    <select name="jenis_usaha" id="jenis_usaha" class="form-control p-input">
                        <option value="Perdagangan">Perdagangan</option>
                        <option value="Jasa" >Jasa</option>
                        <option value="Kuliner" >Kuliner</option>
                        <option value="Industri Kreatif" >Industri Kreatif</option>
                        <option value="Pertanian dan Perikanan">Pertanian dan Perikanan</option>
                        <option value="Manufaktur dan Produksi" >Manufaktur dan Produksi</option>
                        <option value="Kesehatan" >Kesehatan</option>
                        <option value="Transportasi dan Logistik" >Transportasi dan Logistik</option>
                        <option value="Teknologi Informasi" >Teknologi Informasi</option>
                        <option value="Pendidikan">Pendidikan</option>
                       
                    </select>
                </div>
                      <div class="form-group">
                        <label for="mulai_usaha">Mulai Usaha</label>
                      <input type="date" name="mulai_usaha" id="mulai_usaha" class="form-control p-input" placeholder="Mulai Usaha...." rows="5">
                      </div>
                      <div class="form-group">
                        <label for="status_usaha">Status Usaha</label>
                        <select name="status_usaha" id="status_usaha" class="form-control p-input">
                            <option value="Kontrak">Kontrak</option>
                            <option value="Sewa">Sewa</option>
                            <option value="Milik Sendiri">Milik Sendiri</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="ukuran">Ukuran m²</label>
                      <input type="number" name="ukuran" step="0.01" id="ukuran" class="form-control p-input" placeholder="Contoh 32 atau 32.5" rows="5">
                    </div>
                    <div class="form-group ">
                      <label for="alamat_usaha">Alamat Usaha</label>
                      <textarea name="alamat_usaha" id="alamat_usaha" class="form-control p-input" placeholder="Alamat Usaha" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="alasan">Alasan</label>
                      <textarea name="alasan" id="alasan" class="form-control p-input" placeholder="Alasan...." rows="5"></textarea>
                    </div>
              
                 <br>

                 <button type="submit" class="btn btn-primary">Submit</button>
             </form>
         </div>
         <!-- Bootstrap JS -->
     
   
    </div>
</section>
@endsection
