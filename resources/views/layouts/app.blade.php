<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 2rem;
        }
        .container {
            max-width: 700px;
            margin: auto;
        }
        h2 {
            margin-top: 0;
        }
        form {
            margin-top: 1rem;
        }
        input {
            display: block;
            margin-bottom: 1rem;
            padding: 0.5rem;
            width: 100%;
        }
        button {
            padding: 0.5rem 1rem;
        }
        a {
            margin-right: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
