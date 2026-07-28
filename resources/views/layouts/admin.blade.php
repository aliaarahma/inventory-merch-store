<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Admin Panel')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <nav class="bg-gray-800 text-white p-4 flex justify-between items-center">
        <div class="flex gap-4">
            <a href="/products" class="hover:underline">Produk</a>
            <a href="/dashboard" class="hover:underline">Dashboard</a>
            <a href="/categories" class="hover:underline">Kategori</a>
            <a href="/orders" class="hover:underline">Pesanan</a>
        </div>
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="hover:underline">Logout</button>
        </form>
    </nav>

    <div class="p-8">
        @yield('content')
    </div>
</body>
</html>