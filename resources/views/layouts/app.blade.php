<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        nav {
            background: #333;
            color: white;
            padding: 10px;
        }
        nav ul {
            list-style: none;
            display: flex;
            gap: 15px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
        }
        main {
            flex: 1;
            padding: 20px;
            background: #f4f4f4;
        }
        footer {
            background: #eee;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>

    {{-- Navbar --}}
    @include('layouts.partials.navbar')

    {{-- Konten Halaman --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('layouts.partials.footer')

</body>
</html>