<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #3B82F6, #1E40AF); /* biru gradient */
            margin: 0;
        }
        .profile-container {
            background: #fff;
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
            text-align: center;
            width: 350px;
            border-top: 6px solid #3B82F6;
        }
        .profile-image {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            border: 4px solid #3B82F6;
        }
        .profile-title {
            font-size: 22px;
            font-weight: bold;
            color: #1E40AF;
            margin-bottom: 20px;
        }
        .profile-info {
            margin: 12px 0;
            padding: 14px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: bold;
            background: #3B82F6;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        {{-- Foto profil --}}
        <img src="{{ asset('img/pasfoto.jpg') }}" alt="Foto Profil" class="profile-image">

        <div class="profile-title">Profil Mahasiswa</div>

        <div class="profile-info">Nama: {{ $nama }}</div>
        <div class="profile-info">Kelas: {{ $kelas }}</div>
        <div class="profile-info">NPM: {{ $npm }}</div>
    </div>
</body>
</html>
