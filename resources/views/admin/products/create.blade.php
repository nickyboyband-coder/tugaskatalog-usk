@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('content')

<section class="section">

    <div class="container form-container">

        <div class="page-header">

            <span class="section-label">
                ADMIN
            </span>

            <h1>
                Tambah Produk
            </h1>

            <p>
                Masukkan informasi produk baru.
            </p>

        </div>


        <form
            action="{{ route('admin.products.store') }}"
            method="POST"
            enctype="multipart/form-data"
            class="form-card"
        >

            @csrf


            <div class="form-group">

                <label for="code">
                    Kode Produk
                </label>

                <input
                    type="text"
                    id="code"
                    name="code"
                    value="{{ old('code') }}"
                    placeholder="Contoh: P009"
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
                    value="{{ old('name') }}"
                    placeholder="Nama produk"
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
                    value="{{ old('category') }}"
                    placeholder="Contoh: Fashion"
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
                        value="{{ old('price') }}"
                        min="0"
                        placeholder="75000"
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
                        value="{{ old('stock') }}"
                        min="0"
                        placeholder="20"
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
                    placeholder="Deskripsi produk..."
                    required
                >{{ old('description') }}</textarea>

                @error('description')
                    <small class="error-text">
                        {{ $message }}
                    </small>
                @enderror

            </div>


            <div class="form-group">

                <label for="image">
                    Gambar Produk
                </label>

                <input
                    type="file"
                    id="image"
                    name="image"
                    accept=".jpg,.jpeg,.png,.webp"
                >

                <small>
                    Format JPG, JPEG, PNG, WEBP. Maksimal 2 MB.
                </small>

                @error('image')
                    <small class="error-text">
                        {{ $message }}
                    </small>
                @enderror

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
                    Simpan Produk
                </button>

            </div>

        </form>

    </div>

</section>

@endsection