<!DOCTYPE html>
<html>
<head>
    <title>Daftar Artikel</title>
</head>
<body>
    <h1>Daftar Artikel</h1>
    <a href="{{ route('artikel.create') }}">+ Tambah Artikel</a>
    <ul>
        @foreach($artikels as $artikel)
            <li>
                <a href="{{ route('artikel.show', $artikel->id) }}">{{ $artikel->judul }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
