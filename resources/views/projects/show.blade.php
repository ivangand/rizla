@extends('layouts.app')

@section('title', $project['title'])

@section('content')
<section id="project-details" class="mt-5">
    <div class="container">
        <h2 class="text-center">{{ $project['title'] }}</h2>

        <div class="row mt-4">
            <div class="col-md-6">
                <img src="{{ asset('images/projects/' . $project['image']) }}" alt="{{ $project['title'] }}" class="img-fluid">
            </div>

            <div class="col-md-6">
                <h4>Deskripsi Proyek</h4>
                <p>{{ $project['description'] }}</p>

                <h4>Detail Proyek</h4>
                <p>{{ $project['details'] }}</p>

                <a href="{{ route('projects.index') }}" class="btn btn-primary mt-4">Kembali ke Daftar Proyek</a>
            </div>
        </div>
    </div>
</section>
@endsection
