<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kategori</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-8">
    <h1 class="text-2xl font-bold mb-4">Tambah Kategori Baru</h1>

    <form action="/categories" method="POST" class="bg-white p-6 rounded shadow max-w-md">
        @csrf

        <label class="block mb-1 font-semibold">Nama Kategori:</label>
        <input type="text" name="nama_kategori" class="w-full border p-2 rounded mb-4">

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan Kategori</button>
    </form>
</body>
</html>