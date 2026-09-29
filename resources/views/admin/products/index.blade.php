@extends('layouts.app')

@section('title', 'Admin Produk')

@section('content')

<section class="section">

    <div class="container">

        <div class="admin-header">

            <div>

                <span class="section-label">
                    ADMIN
                </span>

                <h1>
                    Kelola Produk
                </h1>

            </div>

            <a
                href="{{ route('admin.products.create') }}"
                class="btn btn-primary"
            >
                + Tambah Produk
            </a>

        </div>


        @if(session('success'))

            <div class="alert success">
                {{ session('success') }}
            </div>

        @endif


        <div class="table-wrapper">

            <table>

                <thead>

                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse($products as $product)

                        <tr>

                            <td>
                                {{ $products->firstItem() + $loop->index }}
                            </td>

                            <td>

                                @if($product->image)

                                    <img
                                        src="{{ asset('storage/' . $product->image) }}"
                                        class="table-image"
                                        alt="{{ $product->name }}"
                                    >

                                @else

                                    <div class="table-no-image">
                                        🛍️
                                    </div>

                                @endif

                            </td>

                            <td>
                                {{ $product->code }}
                            </td>

                            <td>
                                {{ $product->name }}
                            </td>

                            <td>
                                {{ $product->category }}
                            </td>

                            <td>
                                Rp {{ number_format($product->price, 0, ',', '.') }}
                            </td>

                            <td>
                                {{ $product->stock }}
                            </td>

                            <td>

                                <div class="action-buttons">

                                    <a
                                        href="{{ route('products.show', $product) }}"
                                        class="btn-small btn-info"
                                    >
                                        Lihat
                                    </a>

                                    <a
                                        href="{{ route('admin.products.edit', $product) }}"
                                        class="btn-small btn-warning"
                                    >
                                        Ubah
                                    </a>

                                    <form
                                        action="{{ route('admin.products.destroy', $product) }}"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus produk ini?')"
                                    >

                                        @csrf

                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn-small btn-danger"
                                        >
                                            Hapus
                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="8" class="text-center">
                                Belum ada produk.
                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>


        <div class="pagination-wrapper">
            {{ $products->links() }}
        </div>

    </div>

</section>

@endsection