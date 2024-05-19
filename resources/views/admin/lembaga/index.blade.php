@extends('admin.template.main')
@section('main')

<div class="content-wrapper">
      <h3 class="page-heading mb-7">Lembaga Desa</h3>
      <a href="{{ route('lembaga.create') }}" class="btn btn-primary mb-3">Tambah Lembaga Desa</a>
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
                                  <th>Nama Lembaga</th>
                                  <th>Keterangan</th>
                                  <th>foto</th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($lembaga as $item)
                                <tr class="">
                                    <td>{{$item->id}}</td>
                                    <td><h2>{{ substr($item->nama, 0, 10) }}</h2></td>
                                    <td><p>{{ substr($item->keterangan, 0, 50) }}</p></td>
                                    <td>
                                    <img src="{{ asset('storage/lembaga/' . $item->foto) }}" class="img-fluid " style="width: 150px; height: 100px;" alt="Foto Berita">
                                  </td>                                    
                                  <td><a href="{{ route('lembaga.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a></td>
                                  <td>
                                  <form action="{{ route('lembaga.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus lembaga ini?')">Hapus</button>
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