@extends('layout')

@section('content')
    <h1>Student List</h1>
    <a href="{{ route('students.create') }}">Add Student</a>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <ul>
        @foreach ($students as $student)
            <li>
                {{ $student->name }} ({{ $student->email }})
                <a href="{{ route('students.edit', $student) }}">Edit</a>
                <form action="{{ route('students.destroy', $student) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
