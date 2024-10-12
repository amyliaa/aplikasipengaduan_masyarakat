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
        <form action="" method="POST">
            <!-- Nama -->
            <div class="form-group">
                <label for="namaPetugas">Nama Petugas</label>
                <input type="text" class="form-control" id="namaPetugas" name="namaPetugas" placeholder="Masukkan nama anda" required>
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="JohnDoe@example.com" required value="">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="tel" class="form-control" id="password" name="password" placeholder="Masukkan password anda" required>
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