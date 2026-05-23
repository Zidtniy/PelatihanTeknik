@extends('layouts.app')

@section('title', 'Profile')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endpush

@section('content')
<section id="biodata-section">
    <div id="name-bio">
        <h1>MUHAMMAD ZIDTNI RAMADAHANI</h1>
        <h6>Kemahasiswaan</h6>
        <p>Saya adalah mahasiswa teknik informatika angkatan 2025. Saya masuk ke Umnu memilih
            prodi teknik informatikaka
            karena latar belakang saya yang menjadi desainer grafis sewaktu saya SMK. umur
            saya 24 tahun saya adalah anak gap year 2024.
        </p>
    </div>

    <div id="foto-saya">
        <img src="{{ asset('image/foto-saya.jpeg') }}" alt="foto-saya">
    </div>

    <div id="card-detail">
        <div id="alamat">
            <h6>Alamat</h6>
            <p>Saya tinggal di Indonesia, Provinsi Jawa Tengah,
                Kabupaten Kebuemen, Kecamatan Sruweng, Desa Giwangretno, Rt/Rw: 003/003
                Pasar Tengok ngidul</p>
        </div>

        <div id="hobi">
            <h6>Hobi</h6>
            <p>Hobi saya adalah Bermain Biola, Bikin Website Pakai Ai, dan vibe koding. saya
                punya cita cita untuk membuat website dinamis
                dan dijadikan aplikasi android agar bisa mempermudah pekerjaan saya
                sebagai bendahara di pondok pesantren
            </p>
        </div>

        <div id="motivasi">
            <h6>Motivasi ikut pelatihan</h6>
            <p>Dari sekian banyak website AI yang saya buat, saya sedikit tidak asing dengan
                simantic dan caara kerja css sedikit sedikit belajar dari AI juga
                namun kali ini saya mau menunjukan niat dan kemampuan saya walaupun cuma
                vibe koding. saya ingin menantang diri saya.
            </p>
        </div>
    </div>
</section>
@endsection

@push('footer')
<footer>
    <div id="tanda-tangan">
        <i>Copyright 2026 sikiy - Muhammad Zidtni Ramadhani</i>
    </div>
</footer>
@endpush
