@extends('layouts.app')

@section('title', 'Beranda')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endpush

@section('content')
<section id="landing-page">
    <div id="header-page-lp">
        <h1>Your Activity</h1>
        <h1>In your Hand</h1>
        <p>Anda sering merasa jadwal anda berantakan?
            Sering Menunda Dan bingung mana yang harus dilakuin dulu
            Mari kita buat hidup anda mejadi lebih produktif
        </p>
    </div>
    
    <form method="POST" action="{{ route('home.store') }}">
        @csrf
        <div class="input-nama">
            <input type="text" name="nama" class="input-nama" placeholder="Masukan Nama Anda" required>
            <button type="submit" id="start-button">Ayo Coba</button>
        </div>
    </form>
</section>
@endsection
