<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kartu Profil</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f9f9f9;
    }
    .card {
      text-align: center;
    }
    .profile-img {
      width: 250px;   /* ukuran standar profile card */
      height: 300px;
      border-radius: 50%;   /* bulat */
      border: 4px solid #999;
      object-fit: cover;    /* agar gambar tidak gepeng */
      margin-bottom: 20px;
    }
    .info {
      background: #d3d3d3;
      padding: 10px;
      margin: 8px 0;
      border-radius: 5px;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="card">
    <!-- Ganti path sesuai foto Anda -->
    <img src="{{ asset('images/IMG_20230512_200700.jpg') }}" alt="Profile Image" class="profile-img"/>
    <div class="info">Nama : Fandri Albara</div>
    <div class="info">Kelas : A</div>
    <div class="info">NPM : 2317051057</div>
  </div>
</body>
</html>
