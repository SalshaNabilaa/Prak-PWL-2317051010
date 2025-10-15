<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Aplikasi User' }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff5f7; 
        }

        /* Navbar */
        .navbar {
            background: linear-gradient(135deg, #f78fb3, #f5cdde) !important;
        }

        .navbar .nav-link {
            color: #fff !important;
            font-weight: 500;
        }

        .navbar .nav-link:hover {
            color: #ffe6ee !important;
        }

        /* Table */
        .table thead th {
            background: linear-gradient(135deg, #f78fb3, #c79bd2) !important;
            color: white !important;
            font-weight: 600;
            text-align: center;
        }

        .table tbody tr:nth-child(odd) {
            background-color: #fff5f7;
        }

        .table tbody tr:nth-child(even) {
            background-color: #ffeef2;
        }

        .table tbody tr:hover {
            background-color: #ffe0eb !important;
        }

        /* Tombol custom */
        .btn-edit {
            background: linear-gradient(135deg, #74b9ff, #a29bfe);
            border: none;
            color: #fff;
            border-radius: 25px;
            padding: 6px 14px;
            transition: 0.3s;
            font-weight: 500;
            box-shadow: 0 3px 6px rgba(116, 185, 255, 0.4);
        }

        .btn-edit:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 10px rgba(116, 185, 255, 0.6);
        }

        .btn-delete {
            background: linear-gradient(135deg, #ff7675, #fab1a0);
            border: none;
            color: #fff;
            border-radius: 25px;
            padding: 6px 14px;
            transition: 0.3s;
            font-weight: 500;
            box-shadow: 0 3px 6px rgba(255, 118, 117, 0.4);
        }

        .btn-delete:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 10px rgba(255, 118, 117, 0.6);
        }

        footer {
            background: linear-gradient(135deg, #f78fb3, #f5cdde);
            color: #fff;
            text-align: center;
            padding: 10px;
            margin-top: auto;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">

    {{-- Navbar --}}
    @include('components.navbar')

    <div class="container my-4">
        {{-- Flash Message Bootstrap --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Konten Halaman --}}
        @yield('content')
    </div>

    {{-- Footer --}}
    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Notifikasi SweetAlert --}}
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                timer: 2000,
                showConfirmButton: false
            });
        </script>
    @elseif (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: '{{ session('error') }}',
                timer: 2000,
                showConfirmButton: false
            });
        </script>
    @endif
</body>
</html>