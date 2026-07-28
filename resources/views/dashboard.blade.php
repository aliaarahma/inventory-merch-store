@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
    <h1 class="text-2xl font-bold mb-6">Dashboard</h1>

    <div class="grid grid-cols-4 gap-4 mb-6">
        <div class="bg-white p-4 rounded shadow">
            <p class="text-gray-500">Total Produk</p>
            <p class="text-2xl font-bold">{{ $totalProduk }}</p>
        </div>
        <div class="bg-white p-4 rounded shadow">
            <p class="text-gray-500">Total Kategori</p>
            <p class="text-2xl font-bold">{{ $totalKategori }}</p>
        </div>
        <div class="bg-white p-4 rounded shadow">
            <p class="text-gray-500">Total Pesanan</p>
            <p class="text-2xl font-bold">{{ $totalPesanan }}</p>
        </div>
        <div class="bg-white p-4 rounded shadow">
            <p class="text-gray-500">Pendapatan</p>
            <p class="text-2xl font-bold">Rp{{ number_format($totalPendapatan) }}</p>
        </div>
    </div>

    <h2 class="text-xl font-bold mb-2">Pesanan Terbaru</h2>
    <table class="w-full bg-white border border-gray-300">
        <tr class="bg-gray-200 text-left">
            <th class="p-3 border">Atas Nama</th>
            <th class="p-3 border">Status</th>
            <th class="p-3 border">Total</th>
        </tr>
        @foreach ($pesananTerbaru as $order)
        <tr class="border-b">
            <td class="p-3 border">{{ $order->user->name }}</td>
            <td class="p-3 border">{{ $order->status }}</td>
            <td class="p-3 border">Rp{{ number_format($order->total_harga) }}</td>
        </tr>
        @endforeach
    </table>
@endsection