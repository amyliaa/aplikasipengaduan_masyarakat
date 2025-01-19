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
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $dt)
                        <tr>
                            <td>{{ $dt->nama }}</td>
                            <td>{{ $dt->no_telepon }}</td>
                            <td>{{ $dt->alamat }}</td>
                            <td>
                                <div class="btn-group">
                                    <form action="{{ route('masyarakat.destroy',$dt->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class=" fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
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
@if (session('delete'))
    <div class="custom-toast delete-toast" style="background-color: #f44336 !important; color: #fff !important;">
        <i class="fas fa-trash-alt"></i>
        <span>{{ session('delete') }}</span>
        <button type="button" class="close-btn" onclick="this.parentElement.style.display='none';">&times;</button>
    </div>
@endif