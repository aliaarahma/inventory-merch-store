<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
</head>
<body>
    <h1>Tambah Produk Baru</h1>

    <form action="/products" method="POST">
        @csrf

        <label>Nama Produk:</label><br>
        <input type="text" name="nama_produk"><br><br>

        <label>Deskripsi:</label><br>
        <textarea name="deskripsi"></textarea><br><br>

        <label>Harga:</label><br>
        <input type="number" name="harga"><br><br>

        <label>Stok:</label><br>
        <input type="number" name="stok"><br><br>

        <label>Gambar (nama file):</label><br>
        <input type="text" name="gambar"><br><br>

        <label>Kategori:</label><br>
        <select name="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
            @endforeach
        </select><br><br>

        <button type="submit">Simpan Produk</button>
    </form>
</body>
</html>