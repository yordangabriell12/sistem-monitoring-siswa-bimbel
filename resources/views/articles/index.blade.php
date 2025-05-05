<!DOCTYPE html>
<html>
<head>
    <title>List Artikel</title>
</head>
<body>
    <h1>Daftar Artikel</h1>
    <ul>
        @foreach ($articles as $article)
            <li><strong>{{ $article->title }}</strong><br>{{ $article->content }}</li>
        @endforeach
    </ul>
</body>
</html>
