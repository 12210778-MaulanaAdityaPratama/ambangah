
@extends('admin.template.main')

@section('main')
<div class="content-wrapper">
    <h3 class="page-heading mb-7">Hasil Pencarian</h3>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if ($user->isNotEmpty())
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
                                                    <th>Email</th>
                                                    <th>Password</th>
                                                    <th>Role</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($user as $item)
                                                    <tr class="">
                                                        <td>{{ $item->id }}</td>
                                                        <td>{{ $item->name }}</td>
                                                        <td><p>{{ $item->email }}</p></td>
                                                        <td>
                                                            <p class="password" data-password="{{ $item->password }}">****</p>
                                                            <button type="button" class="btn btn-sm toggle-password">
                                                                <i class="fa fa-eye-slash"></i>
                                                            </button>
                                                        </td>
                                                        <td><p>{{ $item->role }}</p></td>
                                                        <td><a href="{{ route('user.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a></td>
                                                        <td>
                                                            <form action="{{ route('user.destroy', $item->id) }}" method="POST" class="d-inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Hapus</button>
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
    @endif
    @if ($galeri->isNotEmpty())
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
                                  <th>Judul</th>
                                  <th>foto</th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($galeri as $item)
                                <tr class="">
                                    <td>{{$item->id}}</td>
                                    <td>{{ $item->judul }}</td>
                                    <td>
                                    <img src="{{ asset('storage/galeri/' . $item->foto) }}" class="img-fluid " style="width: 150px; height: 100px;" alt="Foto">
                                  </td>                                    
                                  <td><a href="{{ route('galeri.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a></td>
                                  <td>
                                  <form action="{{ route('galeri.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus galeri ini?')">Hapus</button>
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
      @endif
      @if ($lembaga->isNotEmpty())     
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
      @endif
      @if ($struktur->isNotEmpty())
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
      @endif           
</div>
@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggleButtons = document.querySelectorAll('.toggle-password');

        toggleButtons.forEach(button => {
            button.addEventListener('click', function () {
                const passwordField = this.previousElementSibling;
                const icon = this.querySelector('i');
                if (passwordField.textContent === '****') {
                    passwordField.textContent = passwordField.getAttribute('data-password');
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                } else {
                    passwordField.textContent = '****';
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                }
            });
        });
    });
</script>
@endsection
@endsection
