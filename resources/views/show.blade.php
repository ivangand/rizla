@extends('layouts.app')

@section('title', 'Detail Proyek')

@section('content')
<section id="project-details">
    <h2>{{ $project->title }}</h2>
    <img src="{{ $project->thumbnail }}" alt="{{ $project->title }}">

    <p>{{ $project->description }}</p>

    <h3>Teknologi yang Digunakan</h3>
    <ul>
        <li>{{ $project->technology_1 }}</li>
        <li>{{ $project->technology_2 }}</li>
        <!-- Tambahkan teknologi lainnya -->
    </ul>

    <a href="{{ route('projects') }}" class="btn btn-secondary">Kembali ke Proyek</a>
</section>
@endsection
