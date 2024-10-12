@extends('layouts.template')
@section('title', 'Tanggapan')

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800 text-center">Berikan Tanggapan</h1>

<div class="card">
    <div class="card-body">
        <form action="" method="POST">
            <!-- tanggapan -->
            <div class="mb-3">
                <label for="tanggapan" class="form-label" style="font-weight: bold;">Tanggapan Anda</label>
                <textarea class="form-control" id="tanggapan" name="tanggapan" rows="5" required></textarea>
            </div>

            <div class="mb-3">
                <h6>Status</h6>
                <fieldset class="form-group">
                    <select class="form-select" id="basicSelect" rows="5">
                        <option>Belum Diproses</option>
                        <option>Sedang Diproses</option>
                        <option>Selesai</option>
                    </select>
                </fieldset>
            </div>

            <!-- Tombol Submit -->
            <div class="col-sm-12 d-flex justify-content-end" style="margin-top: 20px;">
                <button type="submit" class="btn btn-primary me-1 mb-1">Tanggapi</button>
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