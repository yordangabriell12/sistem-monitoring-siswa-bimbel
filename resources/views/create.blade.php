<!-- resources/views/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Project</title>
</head>
<body>
    <h1>Add New Project</h1>
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" required>
        <label for="desc">Description</label>
        <textarea name="desc" required></textarea>
        <button type="submit">Save</button>
    </form>
</body>
</html>
