@extends('layout')

@section('content')
    <h1>Edit Student</h1>
    <form method="POST" action="{{ route('students.update', $student) }}">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $student->name }}" required><br>
        <label>Email:</label>
        <input type="email" name="email" value="{{ $student->email }}" required><br>
        <label>Phone:</label>
        <input type="text" name="phone" value="{{ $student->phone }}"><br>
        <button type="submit">Update</button>
    </form>
@endsection
