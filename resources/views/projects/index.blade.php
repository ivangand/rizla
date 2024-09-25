@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<section id="projects" class="mt-5">
    <div class="container">
        <h2 class="text-center mb-4">Proyek</h2>

        <div class="row">
            @foreach ([1, 2, 3] as $id)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('images/projects/project' . $id . '.jpg') }}" class="card-img-top" alt="Project {{ $id }}">
                    <div class="card-body">
                        <h5 class="card-title">Project {{ $id }}</h5>
                        <p class="card-text">Deskripsi singkat untuk proyek {{ $id }}.</p>
                        <a href="{{ route('projects.show', $id) }}" class="btn btn-primary">Detail Proyek</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
