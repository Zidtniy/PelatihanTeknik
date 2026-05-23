@extends('layouts.app')

@section('title', 'Tentang - Manajemen Aktivitas')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/tentang.css') }}">
@endpush

@section('content')
<section id="tentang-page">
    <div id="hero-tentang">
        <h1>Hai, {{ $nama_user }}!</h1>
        <h3>Mari Kita buat aktifitas harimu menjadi lebih produktif</h3>
        <p></p>
    </div>
</section>

<section id="keunggulan">
    <div class="card-keunggulan" id="card-1">
        <h3>Mudah Diguakan</h3>
        <p>Wesite ini menawarkan kemudahan oprsional, tinggal input aktifitas dan jalankan.</p>
    </div>
    <div class="card-keunggulan" id="card-3">
        <h3>Penyelamat Hidup</h3>
        <p>Dengan website sederhana ini anada tidak akan kawatir lagi kelupaan apa yang mau dilakukan.</p>
    </div>
    <div class="card-keunggulan" id="card-4">
        <h3>Perancang Masa Depan</h3>
        <p>Dengan website ini anda bisa mengembangkan potensi diri dengan analisa kapan, dana apa yang seharusnya dilakukan telbih dahulu.</p>
    </div>
</section>

<section id="core-fiture">
    <form method="POST" action="{{ route('tentang.store') }}">
        @csrf
        <input type="hidden" name="action" value="add">
        <div id="input-aktifitas">
            <!-- Kuadran 1 -->
            <div id="kuadran-1" class="contoh-input">
                <p>Masukkan Aktifitas yang menurut anda Mendesak & Penting Saat Ini</p>
                <div class="wadah-input">
                    <input type="text" name="q1" placeholder="Contoh: Kerjakan Tugas Matkul">
                </div>
                <ul class="list-existing mt-2" style="list-style:none; padding-left:0;">
                    @foreach ($activities[1] as $act)
                    <li style="margin-bottom: 8px; background:#f9f9f9; padding:5px; border-radius:5px; border-left:4px solid #f44336;">
                        <form method="POST" action="{{ route('tentang.store') }}" style="display:inline-block; width:calc(100% - 60px);">
                            @csrf
                            <input type="hidden" name="action" value="edit">
                            <input type="hidden" name="id_activity" value="{{ $act->id_activity }}">
                            <div class="input-group input-group-sm">
                                <input type="text" name="nama_aktifitas" class="form-control" value="{{ $act->nama_aktifitas }}">
                                <button class="btn btn-outline-success" type="submit">Update</button>
                            </div>
                        </form>
                        <form method="POST" action="{{ route('tentang.store') }}" style="display:inline-block; vertical-align:top;">
                            @csrf
                            <input type="hidden" name="action" value="delete">
                            <input type="hidden" name="id_activity" value="{{ $act->id_activity }}">
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Hapus aktivitas ini?')">Hapus</button>
                        </form>
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Kuadran 2 -->
            <div id="kuadran-2" class="contoh-input">
                <p>Masukkan Aktifitas yang menurut anda Penting & Tidak Mendesak Saat Ini</p>
                <div class="wadah-input">
                    <input type="text" name="q2" id="input-q2" placeholder="Contoh: Olahraga Pagi">
                </div>
                <ul class="list-existing mt-2" style="list-style:none; padding-left:0;">
                    @foreach ($activities[2] as $act)
                    <li style="margin-bottom: 8px; background:#f9f9f9; padding:5px; border-radius:5px; border-left:4px solid #4CAF50;">
                        <form method="POST" action="{{ route('tentang.store') }}" style="display:inline-block; width:calc(100% - 60px);">
                            @csrf
                            <input type="hidden" name="action" value="edit">
                            <input type="hidden" name="id_activity" value="{{ $act->id_activity }}">
                            <div class="input-group input-group-sm">
                                <input type="text" name="nama_aktifitas" class="form-control" value="{{ $act->nama_aktifitas }}">
                                <button class="btn btn-outline-success" type="submit">Update</button>
                            </div>
                        </form>
                        <form method="POST" action="{{ route('tentang.store') }}" style="display:inline-block; vertical-align:top;">
                            @csrf
                            <input type="hidden" name="action" value="delete">
                            <input type="hidden" name="id_activity" value="{{ $act->id_activity }}">
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Hapus aktivitas ini?')">Hapus</button>
                        </form>
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Kuadran 3 -->
            <div id="kuadran-3" class="contoh-input">
                <p>Masukkan Aktifitas yang menurut anda Mendesak & Tidak Penting Saat Ini</p>
                <div class="wadah-input">
                    <input type="text" name="q3" id="input-q3" placeholder="Contoh: Balas Chat Tidak Penting">
                </div>
                <ul class="list-existing mt-2" style="list-style:none; padding-left:0;">
                    @foreach ($activities[3] as $act)
                    <li style="margin-bottom: 8px; background:#f9f9f9; padding:5px; border-radius:5px; border-left:4px solid #FF9800;">
                        <form method="POST" action="{{ route('tentang.store') }}" style="display:inline-block; width:calc(100% - 60px);">
                            @csrf
                            <input type="hidden" name="action" value="edit">
                            <input type="hidden" name="id_activity" value="{{ $act->id_activity }}">
                            <div class="input-group input-group-sm">
                                <input type="text" name="nama_aktifitas" class="form-control" value="{{ $act->nama_aktifitas }}">
                                <button class="btn btn-outline-success" type="submit">Update</button>
                            </div>
                        </form>
                        <form method="POST" action="{{ route('tentang.store') }}" style="display:inline-block; vertical-align:top;">
                            @csrf
                            <input type="hidden" name="action" value="delete">
                            <input type="hidden" name="id_activity" value="{{ $act->id_activity }}">
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Hapus aktivitas ini?')">Hapus</button>
                        </form>
                    </li>
                    @endforeach
                </ul>
            </div>
                    
            <!-- Kuadran 4 -->
            <div id="kuadran-4" class="contoh-input">
                <p>Masukkan Aktifitas yang menurut anda Tidak Penting & Tidak Mendesak Saat Ini</p>
                <div class="wadah-input">
                    <input type="text" name="q4" id="input-q4" placeholder="Contoh: Scroll Sosmed">
                </div>
                <ul class="list-existing mt-2" style="list-style:none; padding-left:0;">
                    @foreach ($activities[4] as $act)
                    <li style="margin-bottom: 8px; background:#f9f9f9; padding:5px; border-radius:5px; border-left:4px solid #2196F3;">
                        <form method="POST" action="{{ route('tentang.store') }}" style="display:inline-block; width:calc(100% - 60px);">
                            @csrf
                            <input type="hidden" name="action" value="edit">
                            <input type="hidden" name="id_activity" value="{{ $act->id_activity }}">
                            <div class="input-group input-group-sm">
                                <input type="text" name="nama_aktifitas" class="form-control" value="{{ $act->nama_aktifitas }}">
                                <button class="btn btn-outline-success" type="submit">Update</button>
                            </div>
                        </form>
                        <form method="POST" action="{{ route('tentang.store') }}" style="display:inline-block; vertical-align:top;">
                            @csrf
                            <input type="hidden" name="action" value="delete">
                            <input type="hidden" name="id_activity" value="{{ $act->id_activity }}">
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Hapus aktivitas ini?')">Hapus</button>
                        </form>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="mt-4">
            <button type="submit" id="atur-aktifitas">Simpan</button>
        </div>
    </form>
</section>

<section id="hasil-tabel">
    <!-- halaman Hasil dan Kesimpulan -->
    <div id="halaman-hasil">
        <h2 id="hasil-nama">Berikut adalah Pemetaaan Aktivitas Anda</h2>
        <table class="tabel-metrik">
            <thead>
                <tr>
                    <th></th>
                    <th>Mendesak (Urgent)</th>
                    <th>Tidak Mendesak</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="teks-sisi">Penting</th>
                    <td class="quadrant q1">
                        <ul id="list-q1">
                            @foreach ($activities[1] as $act)
                            <li>{{ $act->nama_aktifitas }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td class="quadrant q2">
                        <ul id="list-q2">
                            @foreach ($activities[2] as $act)
                            <li>{{ $act->nama_aktifitas }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th class="teks-sisi">Tidak Penting</th>
                    <td class="quadrant q3">
                        <ul id="list-q3">
                            @foreach ($activities[3] as $act)
                            <li>{{ $act->nama_aktifitas }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td class="quadrant q4">
                        <ul id="list-q4">
                            @foreach ($activities[4] as $act)
                            <li>{{ $act->nama_aktifitas }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- halaman kesimpulan -->
    <div id="halaman-kesimpulan">
        <h3>Saran dan Rekomendasi</h3>
        <p>Berdasarkan Matrik Einshewoer, dapat di simpulkan bahwa;
        <ul>
            <li>Utamakanlah <strong id="rek-1">
                @if (count($activities[1]) > 0)
                    {{ implode(', ', array_column(json_decode(json_encode($activities[1]), true), 'nama_aktifitas')) }}
                @else
                    Aktivitas di kuadran 1
                @endif
                </strong>, karena aktifitas tersebut bersifat sangat penting dan mendesak, oleh karena itu anda harus segera lakukan sekarang.
            </li>
            <li>Kemudian untuk aktifitas <strong id="rek-2">
                @if (count($activities[2]) > 0)
                    {{ implode(', ', array_column(json_decode(json_encode($activities[2]), true), 'nama_aktifitas')) }}
                @else
                    Aktivitas di kuadran 2
                @endif
                </strong>, aktifitas tersebut bersifat penting tapitetapi tidak mendesak, anda bisa rencankan atau lakukan planinng untuk melakukannya. bagian ini bisa jadi adalah kunci pengembangan diri dan masa depan anda.
            </li>
            <li>Untuk <strong id="rek-3">
                @if (count($activities[3]) > 0)
                    {{ implode(', ', array_column(json_decode(json_encode($activities[3]), true), 'nama_aktifitas')) }}
                @else
                    Aktivitas di kuadran 3
                @endif
                </strong>, aktifitas tersebut bersifat tidak penting dan mendesak, kalau bisa anda limpahkan atau suruh oranglain untuk melakukannya.
            </li>
            <li>Terakhir untuk <strong id="rek-4">
                @if (count($activities[4]) > 0)
                    {{ implode(', ', array_column(json_decode(json_encode($activities[4]), true), 'nama_aktifitas')) }}
                @else
                    Aktivitas di kuadran 4
                @endif
                </strong>, yaitu aktifitas yang bersifat tidak penting dan tidak mendesak, anda bisa exsecusi atau hapus dari pikiran anda untuk melakukannya.
            </li>
        </ul>
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
