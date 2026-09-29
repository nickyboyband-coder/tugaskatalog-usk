@extends('layouts.app')

@section('title', $product->name)

@section('content')

<section class="section">

    <div class="container">

        <a
            href="{{ route('products.index') }}"
            class="back-link"
        >
            ← Kembali ke Katalog
        </a>


        <div class="detail-card">

            <div class="detail-image">

                @if($product->image)

                    <img
                        src="{{ asset('storage/' . $product->image) }}"
                        alt="{{ $product->name }}"
                    >

                @else

                    <div class="detail-no-image">
                        🛍️
                    </div>

                @endif

            </div>


            <div class="detail-content">

                <span class="category">
                    {{ $product->category }}
                </span>

                <h1>
                    {{ $product->name }}
                </h1>

                <p class="detail-code">
                    Kode Produk: {{ $product->code }}
                </p>

                <div class="detail-price">
                    Rp {{ number_format($product->price, 0, ',', '.') }}
                </div>

                <div class="stock">
                    Stok tersedia:
                    <strong>
                        {{ $product->stock }}
                    </strong>
                </div>

                <hr>

                <h3>
                    Deskripsi Produk
                </h3>

                <p class="detail-description">
                    {{ $product->description }}
                </p>

                <a
                    href="{{ route('products.index') }}"
                    class="btn btn-primary"
                >
                    Kembali ke Katalog
                </a>

            </div>

        </div>

    </div>

</section>

@endsection