@extends('layouts.main')

@section('content')
    <h1 class="h3 mb-4 text-dark">Daftar Proyek</h1>

    @foreach ($projects as $p)
        <div class="card mb-3">
            <div class="card-body">
                <h5>{{ $p['title'] }}</h5>
                <p>{{ $p['desc'] }}</p>
                <a href="{{ route('projects.edit', $p['id']) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('projects.destroy', $p['id']) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    @endforeach

    <a href="{{ route('projects.create') }}" class="btn btn-primary">Tambah Proyek Baru</a>
@endsection
