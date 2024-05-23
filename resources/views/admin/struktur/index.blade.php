@extends('admin.template.main')
@section('main')

<div class="content-wrapper">
      <h3 class="page-heading mb-7">Struktur Organisasi</h3>
      <a href="{{ route('struktur.create') }}" class="btn btn-primary mb-3">Tambah Struktur Origanisasi</a>
      @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
      <div class="row mb-2">
        <div class="col-lg-12">
          <div class="card px-4">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-lg-12">
                      <div class="card">
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table center-aligned-table">
                              <thead>
                                <tr class="text-primary">
                                  <th>No</th>
                                  <th>Nama</th>
                                  <th>Nip</th>
                                  <th>Jabatan</th>
                                  <th>Tugas</th>
                                  <th>Foto</th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($struktur as $item)
                                <tr class="">
                                    <td>{{$item->id}}</td>
                                    <td><h2>{{ $item->nama }}</h2></td>
                                    <td>{{ $item->nip }}</td>
                                    <td>{{ $item->jabatan }}</td>
                                    <td>{{ $item->tugas }}</td>
                                    <td>
                                    <img src="{{ asset('storage/struktur/' . $item->foto) }}" class="img-fluid " style="width: 150px; height: 100px;" alt="Foto Pegawai">
                                  </td>
                                    
                                  <td><a href="{{ route('struktur.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a></td>
                                  <td>
                                  <form action="{{ route('struktur.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus struktur ini?')">Hapus</button>
                                </form>
                                  </td>
                                
                                </tr>
                               
                              
                           
                             @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </div>       
  </div>
  @endsection