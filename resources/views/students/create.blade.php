@extends('layouts.app')

@section('content')
    <h2>Add Student</h2>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <p>
            <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" required>
        </p>
        <p>
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
        </p>
        <p>
            <input type="text" name="phone" placeholder="Phone" value="{{ old('phone') }}">
        </p>
        <button type="submit">Save</button>
    </form>
@endsection
