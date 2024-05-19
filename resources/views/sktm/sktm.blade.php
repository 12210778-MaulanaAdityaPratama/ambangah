@extends('template.main')

@section('content')
<section class="features">
    <div class="container">

      <div class="section-title">
        <h2>Pembuatan SKTM</h2>
      </div>

<div class="row justify-content-center">
         <div class="container mt-5">
             <h2>Formulir</h2>
             <form action="{{route('sktm.store')}}" method="POST" class="forms-sample" enctype="multipart/form-data">
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
                 <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                     <div class="form-group col-md-6">
                         <label for="tempat_lahir">Tempat Lahir</label>
                         <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                     </div>
                     <div class="form-group col-md-6">
                         <label for="tanggal_lahir">Tanggal Lahir</label>
                         <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                     </div>
                 </div>
                 <div class="form-row">
                     <div class="form-group col-md-6">
                         <label for="jenis_kelamin">Jenis Kelamin</label>
                         <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                             <option value="">Pilih Jenis Kelamin</option>
                             <option value="Laki-laki">Laki-laki</option>
                             <option value="Perempuan">Perempuan</option>
                         </select>
                     </div>
                     <div class="form-group col-md-6">
                         <label for="alamat">Alamat</label>
                         <input type="text" class="form-control" id="alamat" name="alamat" required>
                     </div>
                 </div>
                 <div class="form-row">
                     <div class="form-group col-md-6">
                         <label for="pekerjaan">Pekerjaan</label>
                         <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" required>
                     </div>
                     <div class="form-group col-md-6">
                         <label for="kewarganegaraan">Kewarganegaraan</label>
                         <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" required>
                     </div>
                 </div>
                 <div class="form-row">
                     <div class="form-group col-md-6">
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
                     <div class="form-group col-md-6">
                        <label for="status_perkawinan">Status Perkawinan</label>
                    <select name="status_perkawinan" id="status_perkawinan" class="form-control p-input">
                        <option value="Menikah">Menikah</option>
                        <option value="Belum Menikah">Belum Menikah</option>
                        <option value="Cerai Hidup">Cerai Hidup</option>
                        <option value="Cerai Mati">Cerai Mati</option>
                    </select>
                     </div>
                 </div>
                 <div class="form-row">
                     <div class="form-group col-md-6">
                         <label for="nik">NIK</label>
                         <input type="text" class="form-control" id="nik" name="nik" required>
                     </div>
                     <div class="form-group col-md-6">
                         <label for="nomor_kk">Nomor KK</label>
                         <input type="text" class="form-control" id="nomor_kk" name="nomor_kk" required>
                     </div>
                 </div>
                 <div class="form-group">
                     <label for="alasan">Alasan</label>
                     <textarea class="form-control" id="alasan" name="alasan" rows="3" required></textarea>
                 </div>
                 <br>

                 <button type="submit" class="btn btn-primary">Submit</button>
             </form>
         </div>
         <!-- Bootstrap JS -->
     
   
    </div>
</section>
@endsection
