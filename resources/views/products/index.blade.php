<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Katalog UMKM Siswa SMK</title>

    <style>

        /* =====================================================
           RESET
        ===================================================== */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        /* =====================================================
           BODY
        ===================================================== */

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f7fb;
            color: #222;
        }


        /* =====================================================
           NAVBAR
        ===================================================== */

        nav {
            background: #2563eb;
            padding: 18px 7%;

            display: flex;
            justify-content: space-between;
            align-items: center;

            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        nav .logo {
            color: white;
            font-size: 22px;
            font-weight: bold;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 25px;
            font-weight: 500;

            transition: 0.2s ease;
        }

        nav a:hover {
            opacity: 0.8;
        }


        /* =====================================================
           CONTAINER
        ===================================================== */

        .container {
            width: 86%;
            max-width: 1200px;
            margin: 40px auto;
        }


        /* =====================================================
           HEADER
        ===================================================== */

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            font-size: 36px;
            margin-bottom: 10px;
            color: #1e3a8a;
        }

        .header p {
            color: #666;
            font-size: 16px;
        }


        /* =====================================================
           SEARCH
        ===================================================== */

        .search-box {
            background: white;
            padding: 20px;

            border-radius: 12px;
            margin-bottom: 30px;

            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
        }

        .search-box form {
            display: flex;
            gap: 10px;
        }

        .search-box input {
            flex: 1;

            padding: 13px 15px;

            border: 1px solid #ddd;
            border-radius: 8px;

            font-size: 15px;
            outline: none;

            transition: 0.2s ease;
        }

        .search-box input:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        .search-box button {
            border: none;

            background: #2563eb;
            color: white;

            padding: 13px 25px;

            border-radius: 8px;

            cursor: pointer;
            font-weight: bold;

            transition: 0.2s ease;
        }

        .search-box button:hover {
            background: #1d4ed8;
        }


        /* =====================================================
           PRODUCT GRID
        ===================================================== */

        .products {
            display: grid;

            grid-template-columns: repeat(4, 1fr);

            gap: 22px;
        }


        /* =====================================================
           PRODUCT CARD
        ===================================================== */

        .card {
            background: white;

            border-radius: 14px;

            overflow: hidden;

            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);

            transition: 0.2s ease;
        }

        .card:hover {
            transform: translateY(-5px);

            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
        }


        /* =====================================================
           PRODUCT IMAGE
        ===================================================== */

        .product-image {
            height: 190px;

            background: #e5e7eb;

            display: flex;
            align-items: center;
            justify-content: center;

            color: #777;

            overflow: hidden;
        }

        .product-image img {
            width: 100%;
            height: 100%;

            object-fit: cover;

            display: block;
        }

        .no-image {
            font-size: 50px;
        }


        /* =====================================================
           CARD BODY
        ===================================================== */

        .card-body {
            padding: 18px;
        }

        .code {
            font-size: 12px;

            color: #777;

            margin-bottom: 7px;
        }

        .card h2 {
            font-size: 19px;

            margin-bottom: 8px;

            color: #111827;
        }


        /* =====================================================
           CATEGORY
        ===================================================== */

        .category {
            display: inline-block;

            background: #dbeafe;
            color: #1d4ed8;

            padding: 5px 10px;

            border-radius: 20px;

            font-size: 12px;

            margin-bottom: 12px;
        }


        /* =====================================================
           DESCRIPTION
        ===================================================== */

        .description {
            color: #666;

            font-size: 14px;

            line-height: 1.5;

            min-height: 42px;
        }


        /* =====================================================
           PRICE
        ===================================================== */

        .price {
            color: #2563eb;

            font-size: 20px;

            font-weight: bold;

            margin-top: 15px;
        }


        /* =====================================================
           STOCK
        ===================================================== */

        .stock {
            color: #555;

            font-size: 13px;

            margin-top: 5px;
        }


        /* =====================================================
           DETAIL BUTTON
        ===================================================== */

        .detail-btn {
            display: block;

            text-align: center;

            margin-top: 15px;

            padding: 10px;

            background: #2563eb;

            color: white;

            text-decoration: none;

            border-radius: 8px;

            transition: 0.2s ease;
        }

        .detail-btn:hover {
            background: #1d4ed8;
        }


        /* =====================================================
           EMPTY PRODUCT
        ===================================================== */

        .empty {
            background: white;

            padding: 50px;

            text-align: center;

            border-radius: 12px;

            grid-column: 1 / -1;
        }

        .empty h2 {
            margin-bottom: 8px;
        }

        .empty p {
            color: #777;
        }


        /* =====================================================
           ⭐ PAGINATION - BAGIAN YANG DIPERBAIKI
        ===================================================== */

        .pagination {
            margin-top: 35px;

            display: flex;

            justify-content: center;
            align-items: center;

            width: 100%;
        }


        /* ⭐ TAMBAHAN:
           Mengatur daftar pagination Laravel */
        .pagination nav {
            background: transparent;

            padding: 0;

            box-shadow: none;

            display: flex;

            justify-content: center;
            align-items: center;
        }


        /* ⭐ TAMBAHAN:
           Laravel menggunakan <ul> untuk pagination */
        .pagination nav > div {
            display: flex;

            justify-content: center;
            align-items: center;
        }


        .pagination ul {
            display: flex;

            align-items: center;
            justify-content: center;

            gap: 6px;

            list-style: none;

            padding: 0;
            margin: 0;
        }


        /* ⭐ TAMBAHAN:
           Semua tombol pagination */
        .pagination a,
        .pagination span {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            min-width: 38px;
            height: 38px;

            padding: 0 11px;

            border-radius: 8px;

            font-size: 14px;

            text-decoration: none;

            box-sizing: border-box;
        }


        /* ⭐ TAMBAHAN:
           Tombol yang bisa diklik */
        .pagination a {
            background: white;

            color: #374151;

            border: 1px solid #e5e7eb;

            transition: 0.2s ease;
        }


        /* ⭐ TAMBAHAN:
           Hover halaman */
        .pagination a:hover {
            background: #2563eb;

            color: white;

            border-color: #2563eb;
        }


        /* ⭐ TAMBAHAN:
           Halaman aktif */
        .pagination span[aria-current="page"] {
            background: #2563eb;

            color: white;

            border: 1px solid #2563eb;

            font-weight: bold;
        }


        /* ⭐⭐⭐ INI YANG PALING PENTING ⭐⭐⭐
           Mengecilkan panah Previous dan Next Laravel */

        .pagination svg {
            width: 18px !important;

            height: 18px !important;

            max-width: 18px !important;

            max-height: 18px !important;

            display: block;
        }


        /* ⭐ Mengatur tombol panah */
        .pagination a[rel="prev"],
        .pagination a[rel="next"] {
            width: 38px;

            min-width: 38px;

            padding: 0;
        }


        /* ⭐ Tombol panah disabled */
        .pagination span[aria-disabled="true"] {
            width: 38px;

            min-width: 38px;

            padding: 0;

            color: #9ca3af;

            background: #f3f4f6;

            border: 1px solid #e5e7eb;
        }


        /* ⭐ Ukuran teks "Previous" dan "Next"
           jika Laravel menampilkan tulisan */
        .pagination .relative {
            font-size: 14px;
        }


        /* =====================================================
           RESPONSIVE TABLET
        ===================================================== */

        @media (max-width: 900px) {

            .products {
                grid-template-columns: repeat(2, 1fr);
            }

        }


        /* =====================================================
           RESPONSIVE HP
        ===================================================== */

        @media (max-width: 600px) {

            nav {
                flex-direction: column;

                gap: 10px;

                text-align: center;
            }


            nav a {
                margin: 0 8px;
            }


            .container {
                width: 92%;

                margin: 25px auto;
            }


            .products {
                grid-template-columns: 1fr;
            }


            .search-box form {
                flex-direction: column;
            }


            .search-box button {
                width: 100%;
            }


            .header h1 {
                font-size: 28px;
            }


            .header p {
                font-size: 14px;
            }


            /* ⭐ Pagination HP */
            .pagination a,
            .pagination span {
                min-width: 34px;

                height: 34px;

                padding: 0 8px;

                font-size: 13px;
            }


            .pagination svg {
                width: 16px !important;

                height: 16px !important;
            }

        }

    </style>
</head>


<body>


    <!-- =====================================================
         NAVBAR
    ====================================================== -->

    <nav>

        <div class="logo">
            Katalog UMKM Siswa SMK
        </div>

        <div>

            <a href="/">
                Beranda
            </a>

            <a href="/katalog">
                Katalog
            </a>

            <a href="/admin/products">
                Admin
            </a>

        </div>

    </nav>


    <!-- =====================================================
         MAIN CONTAINER
    ====================================================== -->

    <div class="container">


        <!-- =================================================
             HEADER
        ================================================== -->

        <div class="header">

            <h1>
                Katalog Produk
            </h1>

            <p>
                Produk kreatif hasil karya siswa SMK
            </p>

        </div>


        <!-- =================================================
             SEARCH
        ================================================== -->

        <div class="search-box">

            <form
                action="{{ route('products.index') }}"
                method="GET"
            >

                <input
                    type="text"
                    name="search"
                    value="{{ $search ?? '' }}"
                    placeholder="Cari nama produk atau kategori..."
                >

                <button type="submit">
                    Cari
                </button>

            </form>

        </div>


        <!-- =================================================
             PRODUCT LIST
        ================================================== -->

        <div class="products">


            @forelse ($products as $product)


                <!-- PRODUCT CARD -->

                <div class="card">


                    <!-- PRODUCT IMAGE -->

                    <div class="product-image">

                        @if ($product->image)

                            <img
                                src="{{ asset('storage/' . $product->image) }}"
                                alt="{{ $product->name }}"
                            >

                        @else

                            <div class="no-image">
                                📦
                            </div>

                        @endif

                    </div>


                    <!-- PRODUCT BODY -->

                    <div class="card-body">


                        <!-- CODE -->

                        <div class="code">
                            {{ $product->code }}
                        </div>


                        <!-- NAME -->

                        <h2>
                            {{ $product->name }}
                        </h2>


                        <!-- CATEGORY -->

                        <span class="category">
                            {{ $product->category }}
                        </span>


                        <!-- DESCRIPTION -->

                        <p class="description">
                            {{ $product->description }}
                        </p>


                        <!-- PRICE -->

                        <div class="price">
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </div>


                        <!-- STOCK -->

                        <div class="stock">
                            Stok: {{ $product->stock }}
                        </div>


                        <!-- DETAIL BUTTON -->

                        <a
                            href="{{ route('products.show', $product) }}"
                            class="detail-btn"
                        >
                            Lihat Detail
                        </a>


                    </div>

                </div>


            @empty


                <!-- EMPTY -->

                <div class="empty">

                    <h2>
                        Produk belum tersedia
                    </h2>

                    <p>
                        Silakan tambahkan produk melalui halaman admin.
                    </p>

                </div>


            @endforelse


        </div>


        <!-- =================================================
             ⭐ PAGINATION
        ================================================== -->

        <div class="pagination">

            {{ $products->links() }}

        </div>


    </div>


</body>

</html>