@extends('layouts.admin')
@section('title', 'Update Status Pesanan')
@section('content')
    <h1 class="text-2xl font-bold mb-4">Update Status Pesanan #{{ $order->id }}</h1>
    <form action="/orders/{{ $order->id }}" method="POST" class="bg-white p-6 rounded shadow max-w-md">
        @csrf
        @method('PUT')
        <label class="block mb-1 font-semibold">Status:</label>
        <select name="status" class="w-full border p-2 rounded mb-4">
            <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="processing" {{ $order->status == 'processing' ? 'selected' : '' }}>Processing</option>
            <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Completed</option>
            <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
        </select>
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Update Status</button>
    </form>
@endsection