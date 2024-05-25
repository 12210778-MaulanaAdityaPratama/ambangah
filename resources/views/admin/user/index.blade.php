@extends('admin.template.main')
@section('main')

<div class="content-wrapper">
    <h3 class="page-heading mb-7">User Desa</h3>
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
                                                    <th>Email</th>
                                                    <th>Password</th>
                                                    <th>Role</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($user as $index => $item)
                                                    <tr class="">
                                                        <td>{{ $loop->iteration + ($user->currentPage() - 1) * $user->perPage() }}</td> <!-- Menggunakan $loop->iteration untuk nomor urut -->                                    
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
                                    <div class="d-flex justify-content-center">
                                        {{ $user->links('vendor.pagination.custom') }}
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
