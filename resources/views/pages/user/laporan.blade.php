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

    .filter-container {
        display: flex;
        gap: 25px;
        margin-bottom: 20px;
    }

    .filter-container .form-control {
        min-width: 450px;
    }
</style>

<section class="section">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">
                Laporan
            </h5>
            <a class="export-pdf-btn float-right" href="{{ url('cetaklaporan') }}">
                <i class="fas fa-file-pdf"></i> Export PDF
            </a>
        </div>
        <div class="card-body">
            <!-- Filter Tanggal -->
            <div class="filter-container">
                <div>
                    <label for="startDate" class="form-label">Dari Tanggal:</label>
                    <input type="date" id="startDate" class="form-control">
                </div>
                <div>
                    <label for="endDate" class="form-label">Sampai Tanggal:</label>
                    <input type="date" id="endDate" class="form-control">
                </div>
            </div>

            <!-- Tabel Data -->
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
                        @foreach($pengaduan as $dt)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $dt->masyarakat->nama }}</td>
                                <td>{{ $dt->isi_pengaduan }}</td>
                                <td>{{ \Carbon\Carbon::parse($dt->created_at)->format('Y-m-d') }}</td>
                                @if($dt->status_pengaduan == 'Belum diproses')
                                    <td><span class="badge bg-danger">{{ $dt->status_pengaduan }}</span></td>
                                @elseif($dt->status_pengaduan == 'Sedang diproses')
                                    <td><span class="badge bg-warning">{{ $dt->status_pengaduan }}</span></td>
                                @else
                                    <td><span class="badge bg-success">{{ $dt->status_pengaduan }}</span></td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection

@section('tambahanJS')
<script src="././dist/assets/extensions/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="././dist/assets/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="././dist/assets/static/js/pages/datatables.js"></script>

<!-- DataTables Initialization -->
<script>
    $(document).ready(function() {
        const table = $('#table1').DataTable();

        // Custom search function for date range
        $.fn.dataTable.ext.search.push(
            function(settings, data, dataIndex) {
                const startDate = $('#startDate').val();
                const endDate = $('#endDate').val();
                const rowDate = data[3]; // Tanggal ada di kolom ke-4 (indeks 3)

                if (startDate && endDate) {
                    const formattedRowDate = new Date(rowDate);
                    const start = new Date(startDate);
                    const end = new Date(endDate);

                    return formattedRowDate >= start && formattedRowDate <= end;
                }
                return true; // Tampilkan semua data jika filter tidak diisi
            }
        );

        // Apply filter on date change
        $('#startDate, #endDate').on('change', function() {
            table.draw();
        });
    });
</script>
@endsection
