<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tugas Pertemuan 7 - Lenno Andhika Pramudya Arkadewa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Inter', sans-serif;
            color: #1c1e21;
        }

        .container {
            max-width: 580px;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .profile-img {
            width: 96px;
            height: 96px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #fff;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .profile-name {
            font-weight: 700;
            font-size: 1.25rem;
            margin-top: 15px;
            margin-bottom: 5px;
        }

        .profile-id {
            color: #65676b;
            font-size: 0.9rem;
            margin-bottom: 30px;
        }

        .link-btn {
            background-color: #ffffff;
            color: #1c1e21;
            padding: 16px;
            margin-bottom: 12px;
            border-radius: 12px;
            text-decoration: none;
            display: block;
            text-align: center;
            font-weight: 600;
            transition: all 0.2s ease-in-out;
            border: 1px solid transparent;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .link-btn:hover {
            background-color: #004d99;
            color: #ffffff;
            text-decoration: none;
            transform: scale(1.02);
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
        }
    </style>
</head>

<body>

    <div class="container text-center">
        <img src="https://ui-avatars.com/api/?name=Lenno+Arkadewa&background=004d99&color=fff" class="profile-img" alt="Avatar">
        <h1 class="profile-name">Lenno Andhika Pramudya Arkadewa</h1>
        <p class="profile-id">5026241057 | Tugas Pertemuan 7 Pemrograman Web A</p>

        <a href="{{ url('pert1') }}" class="link-btn">Pertemuan 1 (intro.html) </a>
        <a href="{{ url('pert2a') }}" class="link-btn">Pertemuan 2 news : CSS (Internal)</a>
        <a href="{{ url('pert2b') }}" class="link-btn">Pertemuan 2 news: CSS (External)</a>
        <a href="{{ url('pert3temp') }}" class="link-btn">Pertemuan 3: Bootstrap Template</a>
        <a href="{{ url('pert3resp') }}" class="link-btn">Pertemuan 3: Responsive Web</a>
        <a href="{{ url('pert3tugas') }}" class="link-btn">Tugas Pertemuan 3 (contoh.html) </a>
        <a href="{{ url('pert4') }}" class="link-btn">Pertemuan 4 (5026241057.html) </a>
        <a href="{{ url('pert5') }}" class="link-btn">Pertemuan 5: DELL Landing Page</a>
        <a href="{{ url('pert5tugas') }}" class="link-btn">Tugas Pertemuan 5 Linktree</a>

    </div>

</body>

</html>
