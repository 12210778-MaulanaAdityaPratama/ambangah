@extends('template.main')

@section('content')
<div class="content-wrapper">
    <h3 class="page-heading mb-7">Surat Usaha</h3>
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
                          <div style="overflow-x: auto;">
                          <table class="table center-aligned-table">
                            <thead>
                              <tr class="text-primary">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Pekerjaan</th>
                                <th>NIK</th>
                                <th>Kewarganegaraan</th>
                                <th>Nama Perusahaan</th>
                                <th>Alamat Perusahaan</th>
                                <th>Jenis Usaha</th>
                                <th>Keterangan</th>
                                <th>Alasan</th>
                                <th>Pemohon</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($suratusaha as $item)
                              <tr class="">
                                  <td>{{$item->id}}</td>
                                  <td>{{$item->nama}}</td>
                                  <td>{{$item->tempat_lahir}}</td>
                                  <td>{{$item->tanggal_lahir}}</td>
                                  <td>{{$item->jenis_kelamin}}</td>
                                  <td>{{$item->alamat}}</td>
                                  <td>{{$item->pekerjaan}}</td>
                                  <td>{{$item->nik}}</td>
                                  <td>{{$item->kewarganegaraan}}</td>
                                  <td>{{$item->nama_perusahaan}}</td>
                                  <td>{{$item->alamat_perusahaan}}</td>
                                  <td>{{$item->jenis_usaha}}</td>
                                  <td>{{$item->keterangan}}</td>
                                  <td>{{$item->alasan}}</td>
                                  <td>{{ $item->user->name }}</td>
                                  {{-- <td><a href="{{ route('suratusaha.download', $item->id) }}" class="btn btn-sm btn-primary">Download PDF</a></td> --}}
                                  <td><a href="{{ route('suratusaha.contoh') }}" class="btn btn-sm btn-primary">Download PDF</a></td>
                                <td>
                                <form action="{{ route('suratusaha.destroy', $item->id) }}" method="POST" class="d-inline">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus suratusaha ini?')">Hapus</button>
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
</div>
@endsection