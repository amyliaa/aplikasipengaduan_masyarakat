<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css?v=1">
</head>

<body>
    <div class="container text-center">
        <div class="title text-center mb-5">
            <h2>Layanan Pengaduan Masyarakat Online</h2>
        </div>
        <hr class="solid">

        <div class="text-left">
            <h6>Laporan Pengaduan</h6>
            <h6>{{ \Carbon\Carbon::parse($data->created_at)->translatedFormat('l, d F Y') }}
            </h6>
        </div>
        <hr class="solid">
        <div class="text-left mt-3 mb-3">
            <h6>Nama : {{ $data->masyarakat->nama }}</h6>
            <h6>No. Telepon : {{ $data->masyarakat->no_telepon }}</h6>
        </div>

        <table class="table table-bordered text-left">
            <thead class="thead">
                <tr>
                    <th scope="col">Laporan Pengaduan</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $data->isi_pengaduan }}</td>
                    <td>
                        @if($data->status_pengaduan == 'Belum diproses')
                        <span class="badge badge-danger">{{ $data->status_pengaduan }}</span>
                        @elseif ($data->status_pengaduan == 'Sedang diproses')
                        <span class="badge badge-warning">{{ $data->status_pengaduan }}</span>
                        @else
                        <span class="badge badge-success">{{ $data->status_pengaduan }}</span>
                        @endif
                    </td>

                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>