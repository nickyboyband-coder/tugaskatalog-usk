@extends('layouts.app')

@section('title', 'Beranda - Katalog UMKM Siswa SMK')

@section('content')

<section class="hero">

    <div class="container hero-content">

        <div class="hero-text">

            <span class="badge">
                UMKM SISWA SMK
            </span>

            <h1>
                Katalog UMKM Siswa SMK
            </h1>

            <p>
                Temukan berbagai produk kreatif hasil karya
                siswa SMK yang inovatif, berkualitas,
                dan bermanfaat.
            </p>

            <a
                href="{{ route('products.index') }}"
                class="btn btn-primary"
            >
                Lihat Katalog
            </a>

        </div>

        <div class="hero-card">

            <div class="hero-icon">
                🛍️
            </div>

            <h3>
                Produk Kreatif Siswa
            </h3>

            <p>
                Dukung karya dan kreativitas siswa SMK.
            </p>

        </div>

    </div>

</section>


<section class="section">

    <div class="container">

        <div class="section-header">

            <div>
                <span class="section-label">
                    PRODUK TERBARU
                </span>

                <h2>
                    Produk Pilihan
                </h2>
            </div>

            <a
                href="{{ route('products.index') }}"
                class="btn btn-outline"
            >
                Lihat Semua
            </a>

        </div>


        <div class="product-grid">

            @forelse($products as $product)

                <div class="product-card">

                    <div class="product-image">

                        @if($product->image)

                            <img
                                src="{{ asset('storage/' . $product->image) }}"
                                alt="{{ $product->name }}"
                            >

                        @else

                            <div class="no-image">
                                🛍️
                            </div>

                        @endif

                    </div>

                    <div class="product-body">

                        <span class="category">
                            {{ $product->category }}
                        </span>

                        <h3>
                            {{ $product->name }}
                        </h3>

                        <p class="description">
                            {{ $product->description }}
                        </p>

                        <div class="product-footer">

                            <strong>
                                Rp {{ number_format($product->price, 0, ',', '.') }}
                            </strong>

                            <a
                                href="{{ route('products.show', $product) }}"
                                class="btn-small"
                            >
                                Detail
                            </a>

                        </div>

                    </div>

                </div>

            @empty

                <p>
                    Belum ada produk.
                </p>

            @endforelse

        </div>

    </div>

</section>

@endsection