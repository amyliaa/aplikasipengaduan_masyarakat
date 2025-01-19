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
                            <th>Status Pengaduan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $dt)
                        <tr>
                        <td>
                            <img src="{{ asset('storage/' . $dt->foto) }}" alt="Foto Pengaduan" width="100">
                        </td>

                            <td>{{ $dt->masyarakat->nama }}</td>
                            <td>{{ \Carbon\Carbon::parse($dt->created_at)->translatedFormat('l, d F Y') }}</td>
                            @if($dt->status_pengaduan =='Belum diproses')
                            <td>
                                <span class="badge bg-danger">{{ $dt->status_pengaduan }}</span></h6>
                            </td>
                            @elseif ($dt->status_pengaduan =='Sedang diproses')
                            <td>
                                <span class="badge bg-warning">{{ $dt->status_pengaduan }}</span></h6>
                            </td>
                            @else
                            <td>
                                <span class="badge bg-success">{{ $dt->status_pengaduan }}</span></h6>
                            </td>
                            @endif
                            <td>
                                <div class="btn-group">
                                    <form action="{{ route('pengaduan.destroy',$dt->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class=" fas fa-trash"></i>
                                        </button>
                                    </form>
                                    <a type="button" class="btn btn-success" href="{{ route('pengaduan.detail', $dt->id) }}">
                                        <i class=" fas fa-eye"></i>
                                    </a>
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
<script src="{{ asset('dist/assets/extensions/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('dist/assets/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('dist/assets/static/js/pages/datatables.js') }}"></script>

<!-- DataTables Initialization -->
<script>
    $(document).ready(function() {
        $('#table1').DataTable(); // Initialize DataTables
    });
</script>
@endsection
@if (session('success'))
    <div class="custom-toast">
        <i class="fas fa-check-circle"></i>
        <span>{{ session('success') }}</span>
        <button type="button" class="close-btn" onclick="this.parentElement.style.display='none';">&times;</button>
    </div>
@endif
@if (session('delete'))
    <div class="custom-toast delete-toast" style="background-color: #f44336 !important; color: #fff !important;">
        <i class="fas fa-trash-alt"></i>
        <span>{{ session('delete') }}</span>
        <button type="button" class="close-btn" onclick="this.parentElement.style.display='none';">&times;</button>
    </div>
@endif