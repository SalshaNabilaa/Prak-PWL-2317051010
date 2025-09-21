<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
            background-color: #ffe4f2; /* pink barbie lembut */
            margin: 0;
            height: 100vh;
            display: flex;
            align-items: center; /* vertikal tengah */
            justify-content: center; /* horizontal tengah */
        }
        .profile {
            width: 420px; /* sedikit lebih lebar */
            padding: 50px;
            border: 2px solid #ffb6e5; /* pink medium */
            border-radius: 25px;
            background-color: #fff;
            box-shadow: 0px 8px 18px rgba(255, 105, 180, 0.2); /* shadow pink */
            text-align: center;
        }
        .profile img {
            width: 160px;
            height: 160px;
            border-radius: 50%;
            border: 4px solid #ff69b4; /* pink barbie terang */
            margin-bottom: 25px;
        }
        .info {
            background-color: #ffd6eb; /* pink pastel */
            padding: 14px;
            margin: 14px 0;
            border-radius: 12px;
            font-size: 20px;
            color: #333;
        }
        .label {
            font-weight: bold;
            color: #ff1493; /* hot pink untuk label */
        }
    </style>
</head>
<body>
    <div class="profile">
        <!-- Gambar profil default -->
        <img src="{{ asset('PP.jpg') }}" alt="Profile Picture">

        <!-- Data -->
        <div class="info"><span class="label">Nama:</span> {{ $Nama }}</div>
        <div class="info"><span class="label">NPM:</span> {{ $NPM }}</div>
        <div class="info"><span class="label">Kelas:</span> {{ $Kelas }}</div>
    </div>
</body>
</html>