<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Admin Panel')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <aside class="w-64 bg-gray-800 text-white p-4 flex flex-col">
            <h2 class="text-xl font-bold mb-8">Stockflow Admin</h2>
            <nav class="flex flex-col gap-2 flex-1">
                <a href="/dashboard" class="px-3 py-2 rounded hover:bg-gray-700">Dashboard</a>
                <a href="/products" class="px-3 py-2 rounded hover:bg-gray-700">Produk</a>
                <a href="/categories" class="px-3 py-2 rounded hover:bg-gray-700">Kategori</a>
                <a href="/orders" class="px-3 py-2 rounded hover:bg-gray-700">Pesanan</a>
            </nav>
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="w-full text-left px-3 py-2 rounded hover:bg-gray-700 text-red-300">Logout</button>
            </form>
        </aside>

        <main class="flex-1 p-8">
            @yield('content')
        </main>
    </div>
</body>
</html>