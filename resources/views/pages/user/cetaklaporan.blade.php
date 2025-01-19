<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PENGMAS | Pengaduan Masyarakat</title>

    <style>
        .thead {
            background-color: #3B82F6;
            color: #ffffff;
        }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="title text-center mb-5">
            <h2>Laporan Layanan Pengaduan Online</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead class="thead">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Deskripsi Pengaduan</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pengaduan as $dt)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $dt->masyarakat->nama }}</td>
                        <td>{{ $dt->isi_pengaduan }}</td>
                        <td>{{ \Carbon\Carbon::parse($dt->created_at)->translatedFormat('l, d F Y') }}</td>
                        <td>
                            @if($dt->status_pengaduan == 'Belum diproses')
                            <span class="badge badge-danger">{{ $dt->status_pengaduan }}</span>
                            @elseif($dt->status_pengaduan == 'Sedang diproses')
                            <span class="badge badge-warning">{{ $dt->status_pengaduan }}</span>
                            @else
                            <span class="badge badge-success">{{ $dt->status_pengaduan }}</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
