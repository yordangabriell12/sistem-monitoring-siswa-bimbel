<!DOCTYPE html>
<html>
<head>
    <title>Tambah Artikel</title>
</head>
<body>
    <h1>Tambah Artikel</h1>
    <form action="{{ route('artikel.store') }}" method="POST">
        @csrf
        <label>Judul:</label><br>
        <input type="text" name="judul"><br><br>
        <label>Konten:</label><br>
        <textarea name="konten"></textarea><br><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
