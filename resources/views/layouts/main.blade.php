<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sistem Monitoring Siswa Bimbel</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
</head>
<body>

    {{-- Contoh sidebar partial --}}
    @include('partials.sidebar')

    {{-- Konten utama halaman --}}
    <div class="container mt-5">
        @yield('content')
    </div>

    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
