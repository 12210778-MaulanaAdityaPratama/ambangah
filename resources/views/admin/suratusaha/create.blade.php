@extends('admin.template.main')
@section('main')
<div class="content-wrapper">
    <h3 class="page-heading mb-4">Surat Usaha</h3>
    <div class="row mb-2">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4">Tambah Surat Usaha</h5>
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
                    <textarea name="nama" id="nama" class="form-control p-input" placeholder="Nama...." rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <textarea name="tempat_lahir" id="tempat_lahir" class="form-control p-input" placeholder="Tempat Lahir...." rows="5"></textarea>
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
                    <textarea name="pekerjaan" id="pekerjaan" class="form-control p-input" placeholder="Pekerjaan...." rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="nik">NIK</label>
                    <textarea name="nik" id="nik" class="form-control p-input" placeholder="NIK...." rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="kewarganegaraan">Kewarganegaraan</label>
                    <textarea name="kewarganegaraan" id="kewarganegaraan" class="form-control p-input" placeholder="Kewarganegaraan...." rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="nama_perusahaan">Nama Perusahaan</label>
                    <textarea name="nama_perusahaan" id="nama_perusahaan" class="form-control p-input" placeholder="Nama Perusahaan...." rows="5"></textarea>
                  </div>
                  <div class="form-group">
                      <label for="alamat_perusahaan">Alamat Perusahaan</label>
                      <textarea name="alamat_perusahaan" id="alamat_perusahaan" class="form-control p-input" placeholder="Alamat Perusahaan...." rows="5"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="jenis_usaha">Jenis Usaha</label>
                      <textarea name="jenis_usaha" id="jenis_usaha" class="form-control p-input" placeholder="Jenis Usaha...." rows="5"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="keterangan">Keterangan</label>
                      <textarea name="keterangan" id="keterangan" class="form-control p-input" placeholder="Keterangan...." rows="5"></textarea>
                    </div>
                  <div class="form-group">
                    <label for="alasan">Alasan</label>
                    <textarea name="alasan" id="alasan" class="form-control p-input" placeholder="Alasan...." rows="5"></textarea>
                  </div>
            
                
              
              
                
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection
