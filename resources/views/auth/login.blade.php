<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <form action="/login" method="POST" class="bg-white p-8 rounded shadow max-w-sm w-full">
        @csrf
        <h1 class="text-2xl font-bold mb-6 text-center">Login Admin</h1>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                {{ $errors->first() }}
            </div>
        @endif

        <label class="block mb-1 font-semibold">Email:</label>
        <input type="email" name="email" class="w-full border p-2 rounded mb-4">

        <label class="block mb-1 font-semibold">Password:</label>
        <input type="password" name="password" class="w-full border p-2 rounded mb-4">

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded w-full hover:bg-blue-700">Login</button>
    </form>
</body>
</html>