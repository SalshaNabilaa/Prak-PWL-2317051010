<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Aplikasi User' }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

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

        /* Card */
        .card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        /* Card header */
        .card-header {
            background: linear-gradient(135deg, #f8a5c2, #d291bc) !important;
            color: #fff !important;
            font-weight: 600;
            border-bottom: none !important;
            border-radius: 15px 15px 0 0 !important;
        }

        .form-card {
            max-width: 600px;
            margin: 0 auto;
        }

        /* Table */
        .table {
            border-radius: 10px;
            overflow: hidden;
        }

        /* Header tabel */
        .table thead th {
            background: linear-gradient(135deg, #f78fb3, #c79bd2) !important;
            color: white !important;
            font-weight: 600;
            text-align: center;
            border: none !important;
        }

        /* Striping tabel */
        .table tbody tr:nth-child(odd) {
            background-color: #fff5f7;
        }

        .table tbody tr:nth-child(even) {
            background-color: #ffeef2;
        }

        /* Hover efek */
        .table tbody tr:hover {
            background-color: #ffe0eb !important;
        }

        /* Button */
        .btn-pink {
            background: linear-gradient(135deg, #f78fb3, #fbb1bd);
            color: white !important;
            border: none;
            border-radius: 30px;
            padding: 6px 18px;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0 3px 6px rgba(247, 143, 179, 0.4);
        }

        .btn-pink:hover {
            background: linear-gradient(135deg, #fbb1bd, #f78fb3);
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(247, 143, 179, 0.6);
        }

        /* Footer */
        footer {
            background: linear-gradient(135deg, #f78fb3, #f5cdde) !important;
            color: #fff !important;
            font-weight: 500;
            font-size: 0.95rem;
            border-top: 2px solid #fddde6;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">

    {{-- Navbar --}}
    @include('components.navbar')

    <div class="container my-4">
        @yield('content')
    </div>

    {{-- Footer --}}
    @include('components.footer')

</body>
</html>
