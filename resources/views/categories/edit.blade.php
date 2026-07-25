<!DOCTYPE html>
<html>
<head>
    <title>Edit Kategori</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-8">
    <h1 class="text-2xl font-bold mb-4">Edit Kategori</h1>

    <form action="/categories/{{ $category->id }}" method="POST" class="bg-white p-6 rounded shadow max-w-md">
        @csrf
        @method('PUT')

        <label class="block mb-1 font-semibold">Nama Kategori:</label>
        <input type="text" name="nama_kategori" value="{{ $category->nama_kategori }}" class="w-full border p-2 rounded mb-4">

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Update Kategori</button>
    </form>
</body>
</html>