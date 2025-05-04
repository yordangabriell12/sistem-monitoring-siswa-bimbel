<!-- resources/views/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Project</title>
</head>
<body>
    <h1>Edit Project</h1>
    <form action="{{ route('projects.update', $project['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title</label>
        <input type="text" name="title" value="{{ $project['title'] }}" required>
        <label for="desc">Description</label>
        <textarea name="desc" required>{{ $project['desc'] }}</textarea>
        <button type="submit">Update</button>
    </form>
</body>
</html>
