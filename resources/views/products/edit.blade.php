<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
</head>
<body>
    <h1>Edit Produk</h1>

    <form action="/products/{{ $product->id }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama Produk:</label><br>
        <input type="text" name="nama_produk" value="{{ $product->nama_produk }}"><br><br>

        <label>Deskripsi:</label><br>
        <textarea name="deskripsi">{{ $product->deskripsi }}</textarea><br><br>

        <label>Harga:</label><br>
        <input type="number" name="harga" value="{{ $product->harga }}"><br><br>

        <label>Stok:</label><br>
        <input type="number" name="stok" value="{{ $product->stok }}"><br><br>

        <label>Gambar (nama file):</label><br>
        <input type="text" name="gambar" value="{{ $product->gambar }}"><br><br>

        <label>Kategori:</label><br>
        <select name="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->nama_kategori }}
                </option>
            @endforeach
        </select><br><br>

        <button type="submit">Update Produk</button>
    </form>
</body>
</html>