@extends('layouts.app')

@section('content')
    <h2>Student List</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('students.create') }}">Add New</a>

    @foreach ($students as $student)
        <p>
            {{ $student->name }} - {{ $student->email }} - {{ $student->phone }}
            <a href="{{ route('students.edit', $student) }}">Edit</a>

            <form action="{{ route('students.destroy', $student) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </p>
    @endforeach
@endsection
