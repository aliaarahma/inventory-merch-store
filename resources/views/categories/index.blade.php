<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kategori</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-8">
    <h1 class="text-2xl font-bold mb-4">Daftar Kategori</h1>

    @if (session('error'))
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    @if (session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <a href="/categories/create" class="inline-block mb-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Tambah Kategori</a>

    <table class="w-full bg-white border border-gray-300">
        <tr class="bg-gray-200 text-left">
            <th class="p-3 border">ID</th>
            <th class="p-3 border">Nama Kategori</th>
            <th class="p-3 border">Aksi</th>
        </tr>
        @foreach ($categories as $category)
        <tr class="border-b">
            <td class="p-3 border">{{ $category->id }}</td>
            <td class="p-3 border">{{ $category->nama_kategori }}</td>
            <td class="p-3 border">
                <a href="/categories/{{ $category->id }}/edit" class="text-blue-600 underline">Edit</a>
                <form action="/categories/{{ $category->id }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin mau hapus kategori ini?')" class="text-red-600 underline ml-2">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>