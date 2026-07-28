<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pesanan</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-8">
    <h1 class="text-2xl font-bold mb-4">Daftar Pesanan</h1>

    <a href="/orders/create" class="inline-block mb-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Buat Pesanan</a>

    <table class="w-full bg-white border border-gray-300">
        <tr class="bg-gray-200 text-left">
            <th class="p-3 border">ID</th>
            <th class="p-3 border">Atas Nama</th>
            <th class="p-3 border">Tanggal</th>
            <th class="p-3 border">Produk</th>
            <th class="p-3 border">No HP</th>
            <th class="p-3 border">Alamat</th>
            <th class="p-3 border">Status</th>
            <th class="p-3 border">Total</th>
        </tr>
        @foreach ($orders as $order)
        <tr class="border-b">
            <td class="p-3 border">{{ $order->id }}</td>
            <td class="p-3 border">{{ $order->user->name }}</td>
            <td class="p-3 border">{{ $order->tanggal_pesan }}</td>
            <td class="p-3 border">
                @foreach ($order->orderDetails as $detail)
                    {{ $detail->product->nama_produk }} ({{ $detail->jumlah }})<br>
                @endforeach
            </td>
            <td class="p-3 border">{{ $order->no_hp }}</td>
            <td class="p-3 border">{{ $order->alamat }}</td>
            <td class="p-3 border">{{ $order->status }}</td>
            <td class="p-3 border">Rp{{ $order->total_harga }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>