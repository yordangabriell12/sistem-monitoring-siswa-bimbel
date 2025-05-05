<!DOCTYPE html>
<html>
<head>
    <title>Edit Artikel</title>
</head>
<body>
    <h1>Edit Artikel</h1>
    <form action="{{ route('artikel.update', $artikel->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Judul:</label><br>
        <input type="text" name="judul" value="{{ $artikel->judul }}"><br><br>
        <label>Konten:</label><br>
        <textarea name="konten">{{ $artikel->konten }}</textarea><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
