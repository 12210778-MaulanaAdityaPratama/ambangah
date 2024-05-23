@extends('admin.template.main')
@section('main')
<div class="content-wrapper">
    <h3 class="page-heading mb-4">Struktur Organisasi</h3>
    <div class="row mb-2">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4">Edit Pegawai</h5>
              <form action="{{route('struktur.update', $struktur->id) }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                <label class="d-block" for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control p-input" value="{{$struktur->nama}}">
                @if ($errors->has('nama'))
                <div class="alert alert-danger">
                    {{ $errors->first('nama') }}
                </div>
            @endif
                <label class="d-block" for="nip">Nip</label>
                @if ($errors->has('nip'))
                <div class="alert alert-danger">
                    {{ $errors->first('nip') }}
                </div>
            @endif
                  <input type="number" name="nip" id="nip" class="form-control p-input" value="{{$struktur->nip}}">
                  <label class="d-block" for="jabatan">Jabatan</label>
                  @if ($errors->has('jabatan'))
                  <div class="alert alert-danger">
                      {{ $errors->first('jabatan') }}
                  </div>
              @endif
                  <input type="text" name="jabatan" id="jabatan" class="form-control p-input" value="{{$struktur->jabatan}}">
                  <label class="d-block" for="tugas">Tugas</label>
                  @if ($errors->has('tugas'))
                  <div class="alert alert-danger">
                      {{ $errors->first('tugas') }}
                  </div>
              @endif
                  <textarea name="tugas" id="tugas" class="form-control p-input"  rows="5" class="w-50 mx-auto mb-3" >{{$struktur->tugas}}</textarea>
                    <label class="d-block" for="foto">Foto</label>
                    @if ($errors->has('foto'))
                    <div class="alert alert-danger">
                        {{ $errors->first('foto') }}
                    </div>
                @endif
                    @if ($struktur->foto)
                    <img src="{{ asset('storage/struktur/' . $struktur->foto) }}" class="img-fluid " style="width: 150px; height: 100px;" alt="Foto Berita">
                    @endif
                    <input type="file" name="foto" id="foto" class="form-control-file">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection