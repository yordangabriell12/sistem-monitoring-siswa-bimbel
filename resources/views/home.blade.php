@extends('layouts.main')

@section('content')
    <h1 class="h3 mb-4 text-dark">Halo dari Laravel!</h1>
    <p>Ini halaman pertama dengan template Bootstrap 🎉</p>
@endsection
@extends('layouts.main')

@section('content')
    <h1>Daftar Proyek</h1>
    @foreach ($projects as $p)
        <div class="card mb-3">
            <div class="card-body">
                <h5>{{ $p['title'] }}</h5>
                <p>{{ $p['desc'] }}</p>
            </div>
        </div>
    @endforeach
@endsection
