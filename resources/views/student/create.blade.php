@extends('layout')

@section('content')
    <h1>Add New Student</h1>
    <form method="POST" action="{{ route('students.store') }}">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required><br>
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <label>Phone:</label>
        <input type="text" name="phone"><br>
        <button type="submit">Save</button>
    </form>
@endsection
