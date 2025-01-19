<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PENGMAS')</title>

    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.svg') }}" type="image/x-icon">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #eff6ff;
            font-family: 'Arial', sans-serif;
            color: #212529;
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar {
            background-color: #ffffff;
            border-bottom: 1px solid #dee2e6;
        }

        .navbar-brand,
        .nav-link {
            color: #495057;
        }

        .nav-link:hover {
            color: #495057;
        }

        .content {
            flex: 1;
        }

        .container {
            padding: 3px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .form-card {
            background-color: #ffffff;
            border: 1px solid #ced4da;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .form-control {
            background-color: #f8f9fa;
            border-radius: 6px;
            border: 1px solid #ced4da;
            color: #495057;
            padding: 12px;
        }

        .form-control:focus {
            background-color: #ffffff;
            box-shadow: none;
            border-color: #007bff;
            color: #212529;
        }

        .btn-submit {
            background-color: #49b5e7;
            color: #fff;
            padding: 12px 15px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-submit:hover {
            background-color: #0056b3;
        }

        footer {
            text-align: center;
            padding: 10px 0;
            background-color: #ffffff;
            color: #212529;
            width: 100%;
            border-top: 1px solid #dee2e6;
            position: relative;
            bottom: 0;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Pengaduan Masyarakat</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
    </nav>

    <!-- Main Content Section -->
    <div class="content">
        <div class="container">
            @yield('content')
        </div>
    </div>
    <footer id="footer">
        <div class="footer clearfix mb-0 text-muted">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>&copy; 2024 Pengaduan Masyarakat</span>
                </div>
            </div>
    </footer>


    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    @yield('tambahanJS')
</body>

</html>