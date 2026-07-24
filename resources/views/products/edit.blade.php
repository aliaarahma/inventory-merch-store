<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-8">
    <h1 class="text-2xl font-bold mb-4">Edit Produk</h1>

    <form action="/products/{{ $product->id }}" method="POST" class="bg-white p-6 rounded shadow max-w-md">
        @csrf
        @method('PUT')

        <label class="block mb-1 font-semibold">Nama Produk:</label>
        <input type="text" name="nama_produk" value="{{ $product->nama_produk }}" class="w-full border p-2 rounded mb-4">

        <label class="block mb-1 font-semibold">Deskripsi:</label>
        <textarea name="deskripsi" class="w-full border p-2 rounded mb-4">{{ $product->deskripsi }}</textarea>

        <label class="block mb-1 font-semibold">Harga:</label>
        <input type="number" name="harga" value="{{ $product->harga }}" class="w-full border p-2 rounded mb-4">

        <label class="block mb-1 font-semibold">Stok:</label>
        <input type="number" name="stok" value="{{ $product->stok }}" class="w-full border p-2 rounded mb-4">

        <label class="block mb-1 font-semibold">Gambar (nama file):</label>
        <input type="text" name="gambar" value="{{ $product->gambar }}" class="w-full border p-2 rounded mb-4">

        <label class="block mb-1 font-semibold">Kategori:</label>
        <select name="category_id" class="w-full border p-2 rounded mb-4">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->nama_kategori }}
                </option>
            @endforeach
        </select>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Update Produk</button>
    </form>
</body>
</html>