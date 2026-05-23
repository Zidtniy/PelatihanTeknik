<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Document')</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @stack('styles')

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">
</head>

<body>
    <header id="navbar">
        <!-- Navigasi -->
        <nav>
            <!-- gambar profile -->
            <div class="logo">
                <img src="{{ asset('image/prof.png') }}" alt="profile">
                <h6 class="text-logo">sikiy</h6>
            </div>

            <div>
                <a href="{{ route('home.index') }}">Beranda</a>
                <a href="{{ route('tentang.index') }}">Tentang</a>
                <a href="{{ route('profile.index') }}">Profile</a>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    @stack('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    @stack('scripts')
</body>

</html>