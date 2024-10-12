@extends('layouts.template')

@section('title', 'Laporan')

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Laporan</h1>

<style>
    .export-pdf-btn {
        background-color: #ff4b4b;   
        color: white;                
        padding: 10px 20px;          
        font-size: 16px;             
        font-weight: bold;           
        border: none;                
        border-radius: 7px;         
        text-decoration: none;       
        display: inline-block;       
    }
    .export-pdf-btn:hover {
        background-color: #e60000;   
    }
</style>

<!-- Basic Tables start -->
<section class="section">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">
                Laporan
            </h5>
            <a class="export-pdf-btn float-right" href="#">
        <i class="fas fa-file-pdf"></i> Export PDF
    </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Masyarakat</th>
                            <th>Deskripsi Pengaduan</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Celci Monica</td>
                            <td>Ada sampah didepan kantor ...</td>
                            <td>12-10-2024</td>
                            <td>
                                <span class="badge bg-danger">Belum diproses</span>
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