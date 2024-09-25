@extends('layouts.app')

@section('title', 'About Me')

@section('content')
<section id="about" class="mt-5">
    <h2 class="text-center mb-4">Tentang Saya</h2>
    <div class="row">
        <div class="col-md-4">
            <img src="img/wow.jpeg" class="img-fluid" alt="Foto Profil">
        </div>
        <div class="col-md-8">
            <p>Nama Saya Rizla Aulia Ditya,Saya adalah siswa Jurusan Komputer Rekayasa dan Perangkat Lunak di SMK Bakti Nusantara 666. Saya memiliki ketertarikan besar dalam bidang teknologi, khususnya pemrograman dan perangkat lunak.</p>
            <p>Saat ini saya aktif mengikuti berbagai pelatihan dan proyek yang memperkuat kemampuan saya di bidang Pemrograman dan perangkat lunak serta membuat sebuah game framework.</p>
        </div>
    </div>
    <h3 class="text-center mb-4">Keterampilan dan keahlian</h3>
    <div class="col-md-8 container" >
        <ul>
            <li>Pemrograman: HTML, JavaScript, PHP</li>
            <li>Editor Application: Adobe Photoshop, Capcut, Kinemaster </li>
        </ul>
    </div>
    <div class="col-md-8 container">
        <h3 class="text-center mb-4">Tujuan dan Aspirasi</h3>
        <p>Saya bercita-cita menjadi seorang profesional di bidang perekonomian, khususnya saya akan kuliah selama 3 bulan jika lulus saya akan lajut bekerja di jepang, Di masa depan, saya berharap dapat terus belajar dan berkembang untuk berkontribusi dalam dunia perekonomian yang terus berkembang.</p>
    </div>
</section>
@endsection
