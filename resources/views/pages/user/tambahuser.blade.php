@extends('layouts.template')
@section('title', 'Tambah Petugas')

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Petugas</h1>

<div class="card">
    <div class="card-header">
        <h5 class="m-0 font-weight-bold text-primary">Tambah Petugas</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="namaPetugas">Nama Petugas</label>
                <input type="text" class="form-control" id="namaPetugas" name="name" placeholder="Masukkan nama anda" required value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="username" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Masukkan username anda" required value="{{ old('username') }}">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password anda" required>
            </div>

            <!-- Tombol Submit -->
            <div class="col-sm-12 d-flex justify-content-end" style="margin-top: 20px;">
                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('tambahanJS')
<!-- jQuery -->
<script src="/vendor/jquery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery Easing -->
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- SB Admin 2 -->
<script src="/js/sb-admin-2.min.js"></script>
<!-- DataTables -->
<script src="/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- DataTables Initialization -->
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>
@endsection

@section('footer')
@endsection