@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<section id="contact" class="mt-5">
    <h2 class="text-center mb-4">Kontak</h2>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4>Hubungi Saya</h4>
                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Pesan</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>

            <div class="col-md-6">
                <h4>Informasi Kontak Lain</h4>
                <p><strong>Email:</strong> <a href="mailto:auliadityarizla@gmail.com">auliadityarizla@gmail.com</a></p>
                <p><strong>Media Sosial:</strong></p>
                <div class="social-links">
                    <a href="https://www.tiktok.com/@rizlaauliaditya?_t=8q0hKC9PXVv&_r=1" target="_blank">TikTok</a>
                    <a href="https://www.instagram.com/rizzedit_?igsh=a2g5dXJmMm9neHRl&utm_source=qr" target="_blank">Instagram</a>
                    <a href="https://github.com/RizlaAuliaDitya" target="_blank">GitHub</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
