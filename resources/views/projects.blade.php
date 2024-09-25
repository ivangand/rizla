@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<section id="projects" class="mt-5">
    <h2 class="text-center mb-4">Proyek Unggulan</h2>

    <div class="row">
        <!-- Project 1 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="img/php.jpeg" class="card-img-top" alt="Project 1">
                <div class="card-body">
                    <h5 class="card-title">Project 1</h5>
                    <p class="card-text">Saya mempunyai project di laptop sekolah yang kantong nya bernomer 9 dan laptopnya nomer 11 yaitu projek artikel. </p>
                </div>
            </div>
        </div>

        <!-- Project 2 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="img/topup.png" class="card-img-top" alt="Project 2">
                <div class="card-body">
                    <h5 class="card-title">Project 2</h5>
                    <p class="card-text">Saya sedang merancang dan membuat sebuah website top up, dan berkerja sama dengan Irfan.</p>
                </div>
            </div>
        </div>

        <!-- Project 3 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <!-- Bungkus gambar dan konten dengan tag <a> -->
                <a href="http://rizlakumar.blogspot.com/" target="_blank" style="text-decoration: none; color: inherit;">
                    <img src="img/blog2.jpg" class="card-img-top" alt="Project 3">
                    <div class="card-body">
                        <h5 class="card-title">Project 3</h5>
                        <p class="card-text">Saya mempunyai sebuah blog yang dapat dikunjungi, bertema kemerdekaan RI dan tentang lomba loba yang akan di adakan di sekolah.</p>
                    </div>
                </a>
            </div>
        </div>
        
</section>
@endsection
