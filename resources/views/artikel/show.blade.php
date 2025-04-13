<!DOCTYPE html>
<html>
<head>
    <title>Detail Artikel</title>
</head>
<body>
    <h1>{{ $artikel->judul }}</h1>
    <p>{{ $artikel->konten }}</p>
    <a href="{{ route('artikel.index') }}">Kembali</a>
</body>
</html>
