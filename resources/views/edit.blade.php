@extends('layouts.app')

@section('content')
    <h2>Edit Student</h2>
    <form action="{{ route('students.update', $student) }}" method="POST">
        @csrf @method('PUT')
        <input name="name" value="{{ $student->name }}" required>
        <input name="email" value="{{ $student->email }}" required>
        <input name="phone" value="{{ $student->phone }}">
        <button type="submit">Update</button>
    </form>
@endsection
