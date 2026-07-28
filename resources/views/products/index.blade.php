@extends('layouts.admin')

@section('title', 'Daftar Produk')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Daftar Produk</h1>

    @if (session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <a href="/products/create" class="inline-block mb-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Tambah Produk</a>

    <table class="w-full bg-white border border-gray-300">
        <tr class="bg-gray-200 text-left">
            <th class="p-3 border">ID</th>
            <th class="p-3 border">Nama Produk</th>
            <th class="p-3 border">Harga</th>
            <th class="p-3 border">Stok</th>
            <th class="p-3 border">Aksi</th>
        </tr>
        @foreach ($products as $product)
        <tr class="border-b">
            <td class="p-3 border">{{ $product->id }}</td>
            <td class="p-3 border">{{ $product->nama_produk }}</td>
            <td class="p-3 border">{{ $product->harga }}</td>
            <td class="p-3 border">{{ $product->stok }}</td>
            <td class="p-3 border">
                <a href="/products/{{ $product->id }}/edit" class="text-blue-600 underline">Edit</a>
                <form action="/products/{{ $product->id }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin mau hapus produk ini?')" class="text-red-600 underline ml-2">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection