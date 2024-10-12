@extends('layouts.template')

@section('title', 'Pengaduan')

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Pengaduan</h1>

<!-- Basic Tables start -->
<section class="section">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">
                Data Pengaduan
            </h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Nama Masyarakat</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="./assets/img/hero-img.png" alt="Gambar Sampah" style="max-width: 200px;"></td>
                            <td>Celci Monica</td>
                            <td>12-10-2024</td>
                            <td>
                                <span class="badge bg-danger">Belum diproses</span>
                            </td>
                            <td>
                            <div class="btn-group">
                                <form action="" method="POST">
                                    <button type="submit" class="btn btn-danger">
                                        <i class=" fas fa-trash"></i>
                                    </button>
                                </form>
                                    <a type="button" class="btn btn-success" href="{{ route('pengaduan.show')}} ">
                                        <i class=" fas fa-eye"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- Basic Tables end -->
@endsection

@section('tambahanJS')
<script src="././dist/assets/extensions/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="././dist/assets/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="././dist/assets/static/js/pages/datatables.js"></script>

<!-- DataTables Initialization -->
<script>
    $(document).ready(function() {
        $('#table1').DataTable();  // Initialize DataTables
    });
</script>
@endsection