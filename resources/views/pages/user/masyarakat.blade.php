@extends('layouts.template')

@section('title', 'Masyarakat')

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Masyarakat</h1>

<!-- Basic Tables start -->
<section class="section">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">
                Data Masyarakat
            </h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>No Telepon</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Graiden</td>
                            <td>076 4820 8838</td>
                            <td>Newyork</td>
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