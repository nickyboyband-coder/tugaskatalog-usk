@extends('layouts.app')

@section('title', 'Ubah Produk')

@section('content')

<section class="section">

    <div class="container form-container">

        <div class="page-header">

            <span class="section-label">
                ADMIN
            </span>

            <h1>
                Ubah Produk
            </h1>

            <p>
                Perbarui informasi produk.
            </p>

        </div>


        <form
            action="{{ route('admin.products.update', $product) }}"
            method="POST"
            enctype="multipart/form-data"
            class="form-card"
        >

            @csrf
            @method('PUT')


            <div class="form-group">

                <label for="code">
                    Kode Produk
                </label>

                <input
                    type="text"
                    id="code"
                    name="code"
                    value="{{ old('code', $product->code) }}"
                    required
                >

                @error('code')
                    <small class="error-text">
                        {{ $message }}
                    </small>
                @enderror

            </div>


            <div class="form-group">

                <label for="name">
                    Nama Produk
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name', $product->name) }}"
                    required
                >

                @error('name')
                    <small class="error-text">
                        {{ $message }}
                    </small>
                @enderror

            </div>


            <div class="form-group">

                <label for="category">
                    Kategori
                </label>

                <input
                    type="text"
                    id="category"
                    name="category"
                    value="{{ old('category', $product->category) }}"
                    required
                >

                @error('category')
                    <small class="error-text">
                        {{ $message }}
                    </small>
                @enderror

            </div>


            <div class="form-row">

                <div class="form-group">

                    <label for="price">
                        Harga
                    </label>

                    <input
                        type="number"
                        id="price"
                        name="price"
                        value="{{ old('price', $product->price) }}"
                        min="0"
                        required
                    >

                    @error('price')
                        <small class="error-text">
                            {{ $message }}
                        </small>
                    @enderror

                </div>


                <div class="form-group">

                    <label for="stock">
                        Stok
                    </label>

                    <input
                        type="number"
                        id="stock"
                        name="stock"
                        value="{{ old('stock', $product->stock) }}"
                        min="0"
                        required
                    >

                    @error('stock')
                        <small class="error-text">
                            {{ $message }}
                        </small>
                    @enderror

                </div>

            </div>


            <div class="form-group">

                <label for="description">
                    Deskripsi
                </label>

                <textarea
                    id="description"
                    name="description"
                    rows="5"
                    required
                >{{ old('description', $product->description) }}</textarea>

                @error('description')
                    <small class="error-text">
                        {{ $message }}
                    </small>
                @enderror

            </div>


            <div class="form-group">

                <label>
                    Gambar Saat Ini
                </label>

                @if($product->image)

                    <img
                        src="{{ asset('storage/' . $product->image) }}"
                        class="preview-image"
                        alt="{{ $product->name }}"
                    >

                @else

                    <p>
                        Belum ada gambar.
                    </p>

                @endif

            </div>


            <div class="form-group">

                <label for="image">
                    Ganti Gambar
                </label>

                <input
                    type="file"
                    id="image"
                    name="image"
                    accept=".jpg,.jpeg,.png,.webp"
                >

                <small>
                    Kosongkan jika tidak ingin mengganti gambar.
                </small>

            </div>


            <div class="form-actions">

                <a
                    href="{{ route('admin.products.index') }}"
                    class="btn btn-outline"
                >
                    Batal
                </a>

                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Simpan Perubahan
                </button>

            </div>

        </form>

    </div>

</section>

@endsection