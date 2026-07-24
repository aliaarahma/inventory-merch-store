<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
</head>
<body>
    <h1>Daftar Produk</h1>

    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->nama_produk }}</td>
            <td>{{ $product->harga }}</td>
            <td>{{ $product->stok }}</td>
            <td><a href="/products/{{ $product->id }}/edit">Edit</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>