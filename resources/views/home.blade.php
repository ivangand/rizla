@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section id="hero">
    <h1>halo whatsapp guys!</h1>
    <p>Saya Siswa SMK Teknik Komputer dan Jaringan</p>
    <a href="#about" class="btn btn-primary">Pelajari Lebih Lanjut</a>
</section>

<section id="about" class="mt-5">
    <h2 class="text-center mb-4">Tentang Saya</h2>
    <div class="row">
        <div class="col-md-6">
            <p>Perkenalkan, saya Rizla Aulia Ditya, seorang siswa SMK yang tertarik dengan dunia teknologi, terutama di bidang pemrograman, desain grafis, dan jaringan komputer.</p>
        </div>
        <div class="col-md-6">
            <p>Saya telah menyelesaikan berbagai proyek yang berhubungan dengan bidang tersebut dan saya terus bersemangat untuk belajar lebih banyak.</p>
        </div>
    </div>
    <div class="text-center mt-4">
        <a href="{{ route('about') }}" class="btn btn-secondary">Tentang Saya</a>
    </div>
</section>

<section id="projects" class="mt-5">
    <h2 class="text-center mb-4">Proyek Unggulan</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="img/php.jpeg" class="card-img-top" alt="Proyek 1">
                <div class="card-body">
                    <h5 class="card-title">Proyek 1</h5>
                    <p class="card-text">Kunjungi deskripsi singkat Proyek 1.</p>
                    <a href="{{ route('projects') }}" class="btn btn-primary">Kunjungi detail Proyek</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="img/topup.png" class="card-img-top" alt="Proyek 2">
                <div class="card-body">
                    <h5 class="card-title">Proyek 2</h5>
                    <p class="card-text">Kunjungi deskripsi singkat Proyek 2.</p>
                    <a href="{{ route('projects') }}" class="btn btn-primary">Kunjungi detail Proyek</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="img/blog2.jpg" class="card-img-top" alt="Proyek 3">
                <div class="card-body">
                    <h5 class="card-title">Proyek 3</h5>
                    <p class="card-text">Kunjungi deskripsi singkat Proyek 3.</p>
                    <a href="{{ route('projects') }}" class="btn btn-primary">Kunjungi detail Proyek</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
