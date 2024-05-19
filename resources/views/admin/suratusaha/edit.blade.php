@extends('admin.template.main')
@section('main')
<div class="content-wrapper">
    <h3 class="page-heading mb-4">Surat Usaha</h3>
    <div class="row mb-2">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4">Edit Surat Usaha</h5>
              <form action="{{route('suratusaha.update', $suratusaha->id) }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                @csrf
                @method('PUT')
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
                    <textarea name="nama" id="nama" class="form-control p-input" rows="5">{{$suratusaha->nama}}</textarea>
                </div>
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <textarea name="tempat_lahir" id="tempat_lahir" class="form-control p-input"  rows="5">{{$suratusaha->tempat_lahir}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control p-input" rows="5" value="{{ $suratusaha->tanggal_lahir }}">
                </div>
                
                  <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control p-input">
                        <option value="Laki-laki" {{ $suratusaha->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Perempuan" {{ $suratusaha->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control p-input" rows="5">{{$suratusaha->alamat}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <textarea name="pekerjaan" id="pekerjaan" class="form-control p-input"  rows="5">{{$suratusaha->pekerjaan}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="nik">NIK</label>
                    <textarea name="nik" id="nik" class="form-control p-input"  rows="5">{{$suratusaha->nik}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="kewarganegaraan">Kewarganegaraan</label>
                    <textarea name="kewarganegaraan" id="kewarganegaraan" class="form-control p-input" rows="5">{{$suratusaha->kewarganegaraan}}</textarea>
                  </div>
                <div class="form-group">
                  <label for="nama_perusahaan">Nama Perusahaan</label>
                  <textarea name="nama_perusahaan" id="nama_perusahaan" class="form-control p-input" rows="5">{{$suratusaha->nama_perusahaan}}</textarea>
                </div>
                <div class="form-group">
                    <label for="alamat_perusahaan">Alamat Perusahaan</label>
                    <textarea name="alamat_perusahaan" id="alamat_perusahaan" class="form-control p-input" rows="5">{{$suratusaha->alamat_perusahaan}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="jenis_usaha">Jenis Usaha</label>
                    <textarea name="jenis_usaha" id="jenis_usaha" class="form-control p-input" rows="5">{{$suratusaha->jenis_usaha}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea name="keterangan" id="keterangan" class="form-control p-input" rows="5">{{$suratusaha->keterangan}}</textarea>
                  </div>
                <div class="form-group">
                  <label for="alasan">Alasan</label>
                  <textarea name="alasan" id="alasan" class="form-control p-input" rows="5">{{$suratusaha->alasan}}</textarea>
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