@extends('admin.template.main')
@section('main')

<div class="content-wrapper">
      <h3 class="page-heading mb-7">Berita</h3>
      <a href="{{ route('berita.create') }}" class="btn btn-primary mb-3">Tambah Berita</a>
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
                                  <th>judul</th>
                                  <th>isi</th>
                                  <th>foto</th>
                                  <th>penulis</th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($berita as $index =>$item)
                                <tr class="">
                                  <td>{{ $loop->iteration + ($berita->currentPage() - 1) * $berita->perPage() }}</td> <!-- Menggunakan $loop->iteration untuk nomor urut -->                                   
                                    <td><h2>{{ substr($item->judul, 0, 10) }}</h2></td>
                                    <td><p>{{ substr($item->isi, 0, 50) }}</p></td>
                                    <td>
                                    <img src="{{ asset('storage/berita/' . $item->foto) }}" class="img-fluid " style="width: 150px; height: 100px;" alt="Foto Berita">
                                  </td>
                                    <td>{{ $item->user->name }}</td>
                                    
                                  <td><a href="{{ route('berita.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a></td>
                                  <td>
                                  <form action="{{ route('berita.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">Hapus</button>
                                </form>
                                  </td>
                                
                                </tr>
                               
                              
                           
                             @endforeach
                              </tbody>
                            </table>
                          </div>
                          <div class="d-flex justify-content-center">
                            {{ $berita->links('vendor.pagination.custom') }}
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