@extends('layouts.admin')
@section('title', 'Tambah Produk')
@section('content')
    <h1 class="text-2xl font-bold mb-4">Tambah Produk Baru</h1>
    <form action="/products" method="POST" class="bg-white p-6 rounded shadow max-w-md">
        @csrf
        <label class="block mb-1 font-semibold">Nama Produk:</label>
        <input type="text" name="nama_produk" class="w-full border p-2 rounded mb-4">
        <label class="block mb-1 font-semibold">Deskripsi:</label>
        <textarea name="deskripsi" class="w-full border p-2 rounded mb-4"></textarea>
        <label class="block mb-1 font-semibold">Harga:</label>
        <input type="number" name="harga" class="w-full border p-2 rounded mb-4">
        <label class="block mb-1 font-semibold">Stok:</label>
        <input type="number" name="stok" class="w-full border p-2 rounded mb-4">
        <label class="block mb-1 font-semibold">Gambar (nama file):</label>
        <input type="text" name="gambar" class="w-full border p-2 rounded mb-4">
        <label class="block mb-1 font-semibold">Kategori:</label>
        <select name="category_id" class="w-full border p-2 rounded mb-4">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
            @endforeach
        </select>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan Produk</button>
    </form>
@endsection