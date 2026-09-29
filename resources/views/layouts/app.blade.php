<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        @yield('title', 'Katalog UMKM Siswa SMK')
    </title>

    <link
        rel="stylesheet"
        href="{{ asset('css/style.css') }}"
    >
</head>

<body>

<header class="navbar">

    <div class="container nav-content">

        <a href="{{ route('home') }}" class="logo">
            Katalog UMKM
        </a>

        <nav>
            <a href="{{ route('home') }}">
                Beranda
            </a>

            <a href="{{ route('products.index') }}">
                Katalog
            </a>

            <a href="{{ route('admin.products.index') }}">
                Admin
            </a>
        </nav>

    </div>

</header>


<main>

    @if(session('success'))
        <div class="container">
            <div class="alert success">
                {{ session('success') }}
            </div>
        </div>
    @endif

    @if($errors->any())
        <div class="container">
            <div class="alert error">
                <strong>
                    Periksa kembali data berikut:
                </strong>

                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    @yield('content')

</main>


<footer class="footer">

    <div class="container">

        <p>
            &copy; {{ date('Y') }}
            Katalog UMKM Siswa SMK
        </p>

    </div>

</footer>

</body>
</html>